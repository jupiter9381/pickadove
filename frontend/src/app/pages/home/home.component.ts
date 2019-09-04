import { Component, OnInit } from '@angular/core';

import { ApiService } from '../../service/api.service';
import { TokenService } from '../../service/token.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {

  profiles = [];
  constructor(private api: ApiService, private token: TokenService, private router: Router) { }

  ngOnInit() {
    this.getPublicProfiles();
  }

  getPublicProfiles(){
    let data = {
      token: this.token.get()
    };
    this.api.getPublicProfiles(data)
      .subscribe(data => {
        this.profiles = data['users'];
      },
      error => {
        if(error.status === 401){
          this.router.navigate(['login']);
        }
      });
  }
}
