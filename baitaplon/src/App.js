import logo from './logo.svg';
import './App.css';
import Getdata from './docapi';
import "bootstrap/dist/css/bootstrap.min.css";
import { Button, Modal } from "bootstrap";
import Trangchu from './trangchu';
import Menu from './menutop';
import Footer from './footer';
import Chitiet from './chitietsp';
import React from 'react';
import ReactDOM from 'react-dom';



function App() {
  return (
    <div className="App">
      <div className='menu'>
        <Menu></Menu>
      </div>
      <div className='footer'>
          <Footer></Footer>
      </div>
    </div>
  );
}

export default App;
