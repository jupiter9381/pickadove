import { Component, OnInit } from '@angular/core';

import { FormControl, Validators, FormGroup, FormArray } from '@angular/forms';
import { ApiService } from '../../service/api.service';

@Component({
  selector: 'app-profile-edit',
  templateUrl: './profile-edit.component.html',
  styleUrls: ['./profile-edit.component.css']
})
export class ProfileEditComponent implements OnInit {

  constructor(private api: ApiService) { }

  fields: any;


  profileForm = new FormGroup({
    ids: new FormArray([new FormControl(333)]),
    values: new FormControl()
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
  }
}
