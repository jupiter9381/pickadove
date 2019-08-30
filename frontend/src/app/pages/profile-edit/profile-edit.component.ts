import {  Component, ElementRef, NgZone, OnInit, ViewChild } from '@angular/core';
import { MapsAPILoader } from '@agm/core';

import { FormControl, Validators, FormGroup, FormArray } from '@angular/forms';
import { ApiService } from '../../service/api.service';
import { TokenService } from '../../service/token.service';



declare var $:any;

@Component({
  selector: 'app-profile-edit',
  templateUrl: './profile-edit.component.html',
  styleUrls: ['./profile-edit.component.css']
})
export class ProfileEditComponent implements OnInit {

  public latitude: number;
  public longitude: number;
  public searchControl: FormControl;
  public zoom: number;

  @ViewChild("search")
  public searchElementRef: ElementRef;

  constructor(private api: ApiService, private token: TokenService, private mapsAPILoader: MapsAPILoader,
    private ngZone: NgZone) { }

  mandatory: any;
  dropdowns: any;
  contacts: any;
  
    state: any;
    suburb: any;

    changableLocation: boolean;

  profileForm = new FormGroup({
    mandatory_values: new FormArray([new FormControl(), new FormControl(), new FormControl(), new FormControl(), new FormControl()]),
    contacts_values: new FormArray([new FormControl(), new FormControl(), new FormControl(), new FormControl(), new FormControl()]),
    dropdown_values: new FormArray([new FormControl(), new FormControl(), new FormControl(), new FormControl(), new FormControl()]),
  });


  ngOnInit() {
    this.changableLocation = false;

    //create search FormControl
    this.searchControl = new FormControl();

    //load Places Autocomplete
    this.mapsAPILoader.load().then(() => {
      let autocomplete = new google.maps.places.Autocomplete(this.searchElementRef.nativeElement, {
        types: ['(cities)'],
        componentRestrictions: { country: ['in', 'AU'] },
      });
      this.changableLocation = false;

      autocomplete.addListener("place_changed", () => {
        this.changableLocation = true;
        this.ngZone.run(() => {
          //get the place result
          let place: google.maps.places.PlaceResult = autocomplete.getPlace();

          //verify result
          if (place.geometry === undefined || place.geometry === null) {
            return;
          };
          let address = place['formatted_address'].split(",")[0];
          let address_array = address.split(' ');
          this.state = address_array[address_array.length - 1];
          this.suburb = '';
          for (let i = 0; i < address_array.length - 1; i++) {
            this.suburb += address_array[i];
          }
          
        });
      });
    });

    this.getProfileFields();
  }

  getProfileFields() {
    this.api.getProfileFields({token: this.token.get()})
      .subscribe(data => {
        this.mandatory = data['mandatory'];
        this.dropdowns = data['dropdowns'];
        this.contacts = data['contacts'];
      });
  }

  onSubmit() {
    let dropdown_items = [];
    $("select.select2").each(function(index) {
      dropdown_items.push($(this).val());
    });

    var profileData = this.profileForm.value;

    var formData = {};
    var mandatoryData = [];
    var contactsData = [];
    var dropdownData = [];
    this.mandatory.forEach((value, i) => {
      let item = {id: value.id, value: profileData['mandatory_values'][i] };
      mandatoryData.push(item);
    });
    this.contacts.forEach((value, i) => {
      let item = {id: value.id, value: profileData['contacts_values'][i] };
      contactsData.push(item);
    });
    this.dropdowns.forEach((value, i) => {
      let item = {id: value.id, value: dropdown_items[i] };
      dropdownData.push(item);
    });

    formData['mandatory'] = mandatoryData;
    formData['dropdowns'] = dropdownData;
    formData['contacts'] = contactsData;
    formData['token'] = this.token.get();
    return this.api.saveProfile(formData).subscribe(
      data => this.handleProfileResponse(data),
      error => this.handleError(error)
    );

  }

  updateLocation() {
    if (this.changableLocation === true) {
      let data = {
        state: this.state,
        suburb: this.suburb,
        token: this.token .get()
      }
      this.api.updateLocation(data)
      .subscribe(data => {
        $("#locationModal").modal('hide');
      });
    }
    
  }
  ngAfterViewInit(): void {
    setTimeout(function() {
      $('.select2').select2({
      });
    }, 1000);
  }

  handleProfileResponse(data: any) {
  }
  handleError(error: any) {}

}
