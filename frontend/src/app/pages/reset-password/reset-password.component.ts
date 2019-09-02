import { Component, OnInit } from '@angular/core';
import { FormControl, Validators, FormGroup } from '@angular/forms';
import { ApiService } from 'src/app/service/api.service';
import { ActivatedRoute } from '@angular/router';
import { Router } from '@angular/router';

@Component({
  selector: 'app-reset-password',
  templateUrl: './reset-password.component.html',
  styleUrls: ['./reset-password.component.css']
})
export class ResetPasswordComponent implements OnInit {

  password = new FormControl('', [Validators.required]);
  confirm_password = new FormControl('', [Validators.required]);

  email: any;

  constructor(private api: ApiService, private route: ActivatedRoute, private router: Router) { }

  ngOnInit() {
    this.route.queryParams.subscribe(
      params => { 
        this.email = params['email']; 
      });
  }

  onSubmit() {
    if(this.password.value === this.confirm_password.value) {
      let data = {
        email: this.email,
        password: this.password.value
      };
      this.api.resetPassword(data)
        .subscribe(data => {
          if(data['success'] === true) {
            this.router.navigate(['login']);
          }
        });
    }
    
  }
}
