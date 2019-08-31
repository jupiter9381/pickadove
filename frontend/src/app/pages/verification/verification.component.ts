import { Component, OnInit } from '@angular/core';
import { ApiService } from '../../service/api.service';

import { FormControl, Validators, FormGroup } from '@angular/forms';

@Component({
  selector: 'app-verification',
  templateUrl: './verification.component.html',
  styleUrls: ['./verification.component.css']
})
export class VerificationComponent implements OnInit {

  constructor(private api: ApiService) { }

  code = new FormControl('', [Validators.required]);
  ngOnInit() {
    
  }

  onVerification() {
    this.api.checkVerification({code: this.code.value})
      .subscribe(data => {
        console.log(data);
      });
  }
}
