import React, { useEffect, useState } from "react";
import { Routes, useLocation, useParams } from 'react-router-dom';
import { Container } from "react-bootstrap";
import './chitietsp.css';

export default function Chitiet() {
    const [data, setData] = useState({
        name: '',
        image: '',
        id: '',
        price: ''
    });
    const [key, setKey] = useState('');
    const [searchValue, setSearchValue] = useState('');
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const productId = urlParams.get('product')
    useEffect(() => {
        async function DocAPI() {
            const response = await fetch('https://66261d68052332d55321ab22.mockapi.io/api/products/'+productId);
            const responseJson = await response.json();
            setData(responseJson);
        }
        DocAPI();
    }, []);

    return (
            <div className="ctsp">
                <Container>
                    <div className="anh3">
                        <div className="blog">
                            <img src={data.image}></img>
                        </div>
                        <div className="blog">
                            <div className="item">
                                <h3>{data.name}</h3>
                                <p style={{ color: 'black', marginTop: 80 }}>Giá: {data.price}</p>
                                <p style={{ color: '#999' }}>Vật liệu: Da bọc, khung gỗ </p>
                                <a href="#" className="btn btn-primary">Mua ngay</a>
                            </div>
                        </div>
                    </div>
                </Container>
            </div>
    )
}