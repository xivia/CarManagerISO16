import { Component, OnInit } from '@angular/core';
import { Brand } from '../datamodel/brand';
import { Car } from '../datamodel/car';

@Component({
  selector: 'app-create-car',
  templateUrl: './create-car.component.html',
  styleUrls: ['./create-car.component.css']
})
export class CreateCarComponent implements OnInit {

  brands: Array<Brand> = new Array<Brand>()
  car: Car = new Car()
  error: string = ''


  constructor() {

  }

  ngOnInit() {
  }

}
