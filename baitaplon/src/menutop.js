import React, { useEffect, useState } from "react";
import './menutop.css';
import { Route, Routes } from "react-router-dom";
import { Link, NavLink } from "react-router-dom";
import Trangchu from "./trangchu";
import Getdata from "./docapi";
import Chitiet from "./chitietsp";
import MenuListComposition from "./menucon";
import { useForm } from "react-hook-form";

export default function Menu() {
   
    return (
        <div className="menutop">
            <nav>
                <ul>
                    <li><NavLink to="/trangchu"
                        style={({ isActive }) => ({
                            color: isActive ? '#fff' : '#545e6f',
                            background: isActive ? '#7600dc' : '#f0f0f0',
                            
                        })}
                    >Trang chủ</NavLink></li>
                    <li><NavLink to="/docapi"
                        style={({ isActive }) => ({
                            color: isActive ? '#fff' : '#545e6f',
                            background: isActive ? '#7600dc' : '#f0f0f0',
                            
                        })}
                    >Sản phẩm</NavLink></li>
                    <li><NavLink to='/chitiet'
                        style={({ isActive }) => ({
                            color: isActive ? '#fff' : '#545e6f',
                            background: isActive ? '#7600dc' : '#f0f0f0',
                            
                        })}
                    >Thông tin</NavLink></li>
                    <li><NavLink style={{ color: '#545e6f' }}>Liên hệ</NavLink></li>
                </ul>
            </nav>
            <Routes>
                <Route path="/trangchu" element={<Trangchu></Trangchu>}></Route>
                <Route path="/docapi" element={<Getdata></Getdata>}></Route>
                <Route path="/chitiet" element={<Chitiet></Chitiet>}></Route>
            </Routes>
        </div>
    )
}