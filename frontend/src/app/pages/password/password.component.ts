import { Component, OnInit } from '@angular/core';
import { ApiService } from '../../service/api.service';

import { FormControl, Validators, FormGroup } from '@angular/forms';

@Component({
  selector: 'app-password',
  templateUrl: './password.component.html',
  styleUrls: ['./password.component.css']
})
export class PasswordComponent implements OnInit {

  email = new FormControl('', [Validators.required, Validators.email]);

  checkedSendEmail:boolean = false;
  constructor(private api: ApiService) { }

  ngOnInit() {
    this.checkedSendEmail = false;
  }

  onSubmit() {
    let data = {email: this.email.value}
    this.api.passwordRecovery(data)
      .subscribe(data => {
        if(data['success'] === true) {
          this.checkedSendEmail = true;
        }
      });
  }
}
