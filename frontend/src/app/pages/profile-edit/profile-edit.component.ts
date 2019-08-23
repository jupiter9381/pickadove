import { Component, OnInit } from '@angular/core';

import { FormControl, Validators, FormGroup, FormArray } from '@angular/forms';
import { ApiService } from '../../service/api.service';
import { timeout } from 'q';


declare var $:any;

@Component({
  selector: 'app-profile-edit',
  templateUrl: './profile-edit.component.html',
  styleUrls: ['./profile-edit.component.css']
})
export class ProfileEditComponent implements OnInit {

  constructor(private api: ApiService) { }

  fields: any;
  cities = [
    {id: 1, name: 'Vilnius'},
    {id: 2, name: 'Kaunas'},
    {id: 3, name: 'Pavilnys', disabled: true},
    {id: 4, name: 'Pabradė'},
    {id: 5, name: 'Klaipėda'}
];
selectedCity: any;
  profileForm = new FormGroup({
    values: new FormArray([new FormControl(), new FormControl(), new FormControl(), new FormControl()])
  });

  ngOnInit() {
      this.getProfileFields();
  }

  getProfileFields() {
    this.api.getProfileFields()
      .subscribe(data => {
        this.fields = data['result'];
        console.log(this.fields);
      });
  }

  onSubmit() {
    console.log(this.profileForm.value);
    console.log(this.fields);
  }

  ngAfterViewInit(): void {
    setTimeout(function(){
      $('.select2').select2({
      });
    }, 1000);
  }
}
