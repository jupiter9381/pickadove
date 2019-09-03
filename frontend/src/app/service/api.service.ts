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
  getProfileFields(data) {
    return this.http.post(`${this.baseURL}getProfileFields`, data);
  }

  saveProfile(data) {
    return this.http.post(`${this.baseURL}saveProfileInfo`, data);
  }
  updateLocation(data) {
    return this.http.post(`${this.baseURL}updateLocation`, data);
  }
  checkVerification(data) {
    return this.http.post(`${this.baseURL}checkVerification`, data);
  }
  getProfileReviews(data) {
    return this.http.post(`${this.baseURL}getProfileReviews`, data);
  }
  submitReview(data) {
    return this.http.post(`${this.baseURL}saveReview`, data);
  }

  getProfileServices(data) {
    return this.http.post(`${this.baseURL}getProfileServices`, data);
  }
  passwordRecovery(data){
    return this.http.post(`${this.baseURL}passwordRecovery`, data);
  }
  resetPassword(data) {
    return this.http.post(`${this.baseURL}resetPassword`, data);
  }
  updateProfileService(data) {
    return this.http.post(`${this.baseURL}updateProfileService`, data);
  }
  makePublic(data) {
    return this.http.post(`${this.baseURL}makePublic`, data);
  }
}
