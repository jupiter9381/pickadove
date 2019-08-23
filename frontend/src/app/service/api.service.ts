import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class ApiService {
  private baseURL = 'http://localhost:8000/api/';

  constructor(
    private http: HttpClient
  ) { }

  signin(data) {
    return this.http.post(`${this.baseURL}login`, data);
  }
  signup(data) {
    return this.http.post(`${this.baseURL}register`, data);
  }
  getProfileFields() {
    return this.http.get(`${this.baseURL}getProfileFields`);
  }
}
