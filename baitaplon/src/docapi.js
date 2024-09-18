import React, { useState } from "react";
import { useEffect } from "react";
import "bootstrap/dist/css/bootstrap.min.css";
import { Button, Modal } from "bootstrap";
import './docapi.css';
import Chitiet from "./chitietsp";
import { Link, Route,Routes } from "react-router-dom";

function Getdata() {
    const [data, setData] = useState([]);
    const [dataFiltered, setDataFiltered] = useState([]);
    const [key, setKey] = useState('');
    const [searchValue,setSearchValue] = useState('');
    useEffect(() => {
        async function DocAPI() {
            const response = await fetch('https://66261d68052332d55321ab22.mockapi.io/api/products');
            const responseJson = await response.json();
            setData(responseJson);
            setDataFiltered(responseJson);
        }
        DocAPI();
    }, []);
    async function locAPI(event) {
        event.preventDefault();
        var datafiltered = [...data];
        datafiltered = datafiltered.filter(ghe => ghe.name.includes(searchValue));
        setDataFiltered(datafiltered);
    }
    return (
        <div>
            <h1>Nội thất cao cấp</h1>
            <form onSubmit={locAPI} className="form-inline" role="form">
                        
                            <div className="form-group" style={{width: 300, margin: '0 auto',marginBottom: 30,marginTop: 30}}>
                                <input type="text" value={searchValue} onChange={(e) => setSearchValue(e.target.value)} className="form-control" id="" placeholder="Tìm sản phẩm"/>
                            </div>
                        
                            
                        
                            <button type="submit" class="btn btn-primary">tìm kiếm</button>
                        </form>
                        
            <tbody>
                {
                    dataFiltered.map((p, index) => (
                        <div className="card" key={index}>
                            <nav>
                           <Link to="/chitiet"><img clLinkssName="card-img-top" src={p.image} alt="Card image"/></Link>
                                <div className="card-body">
                                    <h4 className="card-title">{p.name}</h4>
                                    <p className="card-text">{p.price}</p>
                                    <Link to={"/chitiet?product="+p.id} className="btn btn-primary">Xem chi tiết</Link>
                                </div>
                                </nav>
                                <Routes>
                                    <Route path="/chitiet" element={<Chitiet></Chitiet>}></Route>
                                </Routes>
                        </div>
                    )
                    )
                }
            </tbody>
        </div>
    )
}

export default Getdata;
