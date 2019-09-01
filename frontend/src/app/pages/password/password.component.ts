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

  constructor(private api: ApiService) { }

  ngOnInit() {
  }

  onSubmit() {
    let data = {email: this.email.value}
    this.api.passwordRecovery(data)
      .subscribe(data => {
        console.log(data);
      });
  }
}
