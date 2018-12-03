import { Component, OnInit } from '@angular/core';
import { Settings } from '../datamodel/settings';

@Component({
  selector: 'app-settings',
  templateUrl: './settings.component.html',
  styleUrls: ['./settings.component.css']
})
export class SettingsComponent implements OnInit {

  settings: Settings = new Settings()
  values: Array<number> = [
    1,
    2,
    3,
    4,
    5
  ]
  scales: Array<number> = [
    25,
    50,
    75,
    100
  ]

  constructor() { }

  ngOnInit() {
  }

}
