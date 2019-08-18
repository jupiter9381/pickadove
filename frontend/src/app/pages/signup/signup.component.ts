import { Component, OnInit } from '@angular/core';
import { ApiService } from '../../service/api.service';

import { FormControl, Validators, FormGroup } from '@angular/forms';
import { Router } from '@angular/router';

@Component({
  selector: 'app-signup',
  templateUrl: './signup.component.html',
  styleUrls: ['./signup.component.css']
})
export class SignupComponent implements OnInit {

  constructor(private api: ApiService, private router: Router) { }

  email = new FormControl('', [Validators.required, Validators.email]);
  password = new FormControl('', [Validators.required]);

  firstname = new FormControl('', [Validators.required]);
  lastname = new FormControl('', [Validators.required]);
  regEmail = new FormControl('',  [Validators.required]);
  regPassword = new FormControl('',  [Validators.required]);

  signupForm = new FormGroup({
    usertype: new FormControl(),
    firstname : new FormControl('', [Validators.required]),
    lastname : new FormControl('', [Validators.required]),
    email : new FormControl('',  [Validators.required]),
    password : new FormControl('',  [Validators.required]),
  });
  submitted = false;

  ngOnInit() {

  }

  onLogin() {
    this.submitted = true;
    
    return this.api.signin({
      email: this.email.value,
      password: this.password.value
    }).subscribe(
      data => this.handleProfileResponse(data),
      error => this.handleError(error)
    );
  }

  onRegister() {
    this.submitted = true;
    return this.api.signup(this.signupForm.value).subscribe(
      data => this.handleProfileResponse(data),
      error => this.handleError(error)
    );
  }
  handleProfileResponse(data: any) {
    this.submitted = false;
    if (data.type === 'signup'){
      this.router.navigate(['verification']);
    }
  }
  handleError(error: any){}
}
