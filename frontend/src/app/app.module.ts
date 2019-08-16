import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HeaderComponent } from './admin/templates/header/header.component';
import { FooterComponent } from './admin/templates/footer/footer.component';
import { MenuComponent } from './admin/templates/menu/menu.component';
import { DashboardComponent } from './admin/pages/dashboard/dashboard.component';
import { FieldComponent } from './admin/pages/field/field.component';
import { BreadcrumbComponent } from './admin/templates/breadcrumb/breadcrumb.component';

@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    FooterComponent,
    MenuComponent,
    DashboardComponent,
    FieldComponent,
    BreadcrumbComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
