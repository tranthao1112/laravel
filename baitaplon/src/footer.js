import React from "react";
import { Container } from "react-bootstrap";
import './footer.css';
import { Button, Modal } from "bootstrap";
import "bootstrap/dist/css/bootstrap.min.css";

export default function Footer(){
    return(
    <div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-3 col-lg-3">
                <h4>HAVE A QUESTION ?</h4>
                <p>Address: 203 Fake St.Moutain View, San Francisco, California, USA</p>
                <p>Hotline: + 0123 456 789</p>
                <p>Email: petsetting@gmail.com</p>
            </div>

            <div class="col-sm-3 col-md-3 col-lg-3">
                <h4>EXPLORE</h4>
                <p>Shop All</p>
                <p>Deals</p>
                <p>Most popular</p>
                <p>Deals</p>
            </div>

            <div class="col-sm-3 col-md-3 col-lg-3">
                <h4>LINK</h4>
                <p>Contact Us</p>
                <p>Payment Methods</p>
                <p>Shipping & Return</p>
                <p>Privacy Policy</p>
            </div>

            <div class="col-sm-3 col-md-3 col-lg-3">

                <form action="" method="POST" role="form">
                    <h4>NEWSLETTER</h4>
                    <p>Sign up to our newsletter for the latest news & discounts</p>
                    <div class="form-group">
                        <input type="text" class="form-control" id="" placeholder="Your email"/>
                    </div>
                    <button type="submit" class="btn btn-primary"
                        style={{backgroundColor: '#DCAC62', color: 'white',marginTop: 10}}>Subscribe</button>
                </form>

            </div>

        </div>
    </div>
    </div>
    )
}