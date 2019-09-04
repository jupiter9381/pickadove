import { Component, OnInit } from '@angular/core';
import { ApiService } from '../../service/api.service';
import { TokenService } from '../../service/token.service';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.css']
})
export class HeaderComponent implements OnInit {

  state: any;

  constructor(private api: ApiService, private token: TokenService) { }

  ngOnInit() {
    this.getUserInfo();
  }

  getUserInfo() {
    // this.api.getUserInfo({token: this.token.get()})
    //   .subscribe(data => {
    //     console.log(data);
    //     this.state = data['user']['state'];
    //   });
  }
}
