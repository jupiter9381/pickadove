import { Component, OnInit } from '@angular/core';
import { ApiService } from '../../service/api.service';

import { FormControl, Validators, FormGroup } from '@angular/forms';
import { Router } from '@angular/router';

@Component({
  selector: 'app-verification',
  templateUrl: './verification.component.html',
  styleUrls: ['./verification.component.css']
})
export class VerificationComponent implements OnInit {

  constructor(private api: ApiService, private router: Router) { }

  code = new FormControl('', [Validators.required]);
  ngOnInit() {
    
  }

  onVerification() {
    this.api.checkVerification({code: this.code.value})
      .subscribe(data => {
        if (data.success === true) {
          this.router.navigate(['profile-edit']);
        }
      },
      error => {
        console.log(error);
      });
  }
}
