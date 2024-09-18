import React from "react";
import { Button, Modal } from "bootstrap";
import "bootstrap/dist/css/bootstrap.min.css";
import './trangchu.css';
import Ttsp from "./ttsp";
import { Container } from "react-bootstrap";
import { Link, Route, Routes } from "react-router-dom";
import Chitiet from "./chitietsp";

export default function Trangchu() {
    return (
        <div className="body">
                <div id="demo" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                    </div>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://noithatmanhhe.vn/media/22546/4-phong-cach-thiet-ke-noi-that-luxury-noi-that-manh-he.jpg" alt="Los Angeles" class="d-block" style={{ width: '100%' }} />
                                <div class="carousel-caption" style={{color: '#DCAC62'}}>
                                    <h3>Nội thất tinh tế</h3>
                                    <p>Thiết kế, trang trí và cung cấp nội thất trọn gói </p>
                                </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://neohouse.vn/wp-content/uploads/2017/07/thiet-ke-noi-that-biet-thu-hien-dai-anh-bia.jpg" alt="Chicago" class="d-block" style={{ width: '100%' }} />
                                <div class="carousel-caption" style={{color: '#DCAC62'}}>
                                    <h3>Không gian phòng ngủ</h3>
                                    <p>Mang lại những nguồn cảm hứng và nét sinh động cho không gian</p>
                                </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://rcong.vn/wp-content/uploads/2022/10/Tang-1-Khach-bep-lideco-1-edited-1.jpg" alt="New York" class="d-block" style={{ width: '100%' }} />
                                <div class="carousel-caption" style={{color: '#DCAC62'}}>
                                    <h3>Không gian phòng khách</h3>
                                    <p>Là không gian chính của gia đình bạn</p>
                                </div>
                        </div>
                    </div>


                    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            <div className="sanpham">
                <h1>Sản phẩm nổi bật</h1>
                <div className="spnb">
                    <div class="item">
                        <Link to="/chitiet?product=1"><img src="https://i.pinimg.com/736x/52/1e/5c/521e5cafacd8157bae1dcbcc23aeb8ff.jpg" /></Link>
                        <div class="the">
                            <h4  >Ghế sofa góc đệm da thiết kế hiện đại L23</h4>
                            <p >14.000.000VND</p>
                            <Link to="/chitiet?product=1" class="btn btn-primary">xem chi tiết</Link>
                        </div>
                    </div>
                    <div class="item">
                        <Link to="/chitiet?product=4"><img src="https://i.pinimg.com/736x/20/95/1b/20951bed283971292ddc9e49ee002b15.jpg" /></Link>
                        <div class="the">
                            <h4  >Ghế Pacha</h4>
                            <p >5.400.000VND</p>
                            <Link to="/chitiet?product=4" class="btn btn-primary">xem chi tiết</Link>
                        </div>
                    </div>
                    <div class="item">
                        <Link to="/chitiet?product=6"><img src="https://i.pinimg.com/736x/be/06/a2/be06a20cdb3231654fb82bb4f168b902.jpg" /></Link>
                        <div class="the">
                            <h4>Giường ngủ sang trọng tinh tế PB08</h4>
                            <p>8.600.000VND</p>
                            <Link to="/chitiet?product=6" class="btn btn-primary">xem chi tiết</Link>
                        </div>
                    </div>
                    <div class="item">
                        <Link to="/chitiet?product=10"><img src="https://i.pinimg.com/564x/a8/a9/84/a8a984d6ad69b33c406ee24e1b2a8ee0.jpg" /></Link>
                        <div class="the">
                            <h4>Ghế giám đốc Haven</h4>
                            <p>3.500.000VND</p>
                            <Link to="/chitiet?product=10" class="btn btn-primary">xem chi tiết</Link>
                        </div>
                    </div>
                    <Routes>
                        <Route path="/chitiet" element={<Chitiet></Chitiet>}></Route>
                    </Routes>
                </div>
            </div>
            <Container>
                <div className="thongtin">
                    <div className="chitiet">
                        <img src="https://i.pinimg.com/564x/52/75/05/5275054f513922763cbf68cf4d95dbc9.jpg"></img>
                    </div>
                    <div className="chitiet">
                        <h1>PHONG CÁCH LUXURY</h1>
                        <h5>ĐẲNG CẤP CỦA GIỚI THƯỢNG LƯU</h5>
                        <p>Thiết kế nội thất biệt thự Luxury là một trong những cách bố trí không gian được giới t
                            hượng lưu yêu thích nhất. Vẻ đẹp xa hoa,
                            sang trọng và quý phái của nội thất Luxury chính là điều mà nhiều người mong muốn.
                            Phong cách thiết kế nội thất Luxury đang được giới thượng lưu đặc biệt quan tâm
                            bởi nó thể hiện sự đẳng cấp, quyền uy của gia chủ. Với phong cách này, không gian nội t
                            hất nhà bạn sẽ trở nên sang trọng, xa hoa, lộng lẫy và quý phái như đang được ở trong một cung điện.</p>
                    </div>
                </div>
            </Container>
            <Container>
                <div class="container mt-3">

                    <h2 style={{ marginTop: 30 }}>Đặc Tính Sản Phẩm Nội Thất</h2>
                    <p>Chất liệu vải cao cấp được sử dụng cho bề mặt ghế,
                        kết hợp với chân thép không gỉ
                        , tạo nên sự đẳng cấp và độ bền cho sản phẩm.
                    </p>
                    <div className="note">
                        <div className="note2">
                            <div className="anh2">
                                <img src="https://neohouse.vn/wp-content/uploads/2017/07/thiet-ke-noi-that-biet-thu-hien-dai-anh-bia.jpg"></img>
                            </div>
                            <div className="anh2">
                                <h6>Bàn làm việc Wing tại Triển lãm Milan Design Week 2024</h6>
                            </div>
                        </div>
                        <div className="note2">
                            <div className="anh2">
                                <img src="https://truongthang.vn/wp-content/uploads/2023/08/goi-y-noi-that-phong-khach-rong-cho-nha-them-sang-va-dep-3.jpg"></img>
                            </div>
                            <div className="anh2">
                                <h6>Bàn làm việc Wing tại Triển lãm Milan Design Week 2024</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </Container>
        </div>
    )
}