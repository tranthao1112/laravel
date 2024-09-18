<?php
namespace App\Helper;
class Cart{
    public $items=[];
    public $Tongsl=0;
    public $Tongtien=0;

    public function __construct(){
        $this->items=session('cart')?session('cart'):[];
        $this->Tongsl=$this->Tinhtongsl();
        $this->Tongtien=$this->Tinhtongtien();

    }
    //Tạo hàng thêm sản phẩm vào giỏ
    public function Add($sp,$sl){
        $id=$sp->id;

        if(isset($this->items[$id])){
            //Nếu có thì số lượng tăng lên 1
            $this->items[$id]->Soluong+=1;
        }else{
            $item=(object)[
                'Ma'=>$id,
                'tensp'=>$sp->tensp,
                'hinhanh'=>$sp->hinhanh,
                'giasp'=>$sp->giasp,
                'Soluong'=>$sl
                ];
                //Add vào mảng           
                 $this->items[$sp->id] = $item;

        }
        //Gán giỏ hàng vào session
        session(['cart'=>$this->items]);
    }

    private function Tinhtongsl(){
        $Tong=0;
        foreach($this->items as $item){
            $Tong+=$item->Soluong;
        }
        return $Tong;
    }

    private function Tinhtongtien(){
        $Tong=0;
        foreach($this->items as $item){
            $Tong+=($item->Soluong *$item->giasp);
        }
        return $Tong;
    }

    public function delete($id){
        if(isset($this->items[$id])){
            unset($this->items[$id]);
            session(['cart'=>$this->items]);
        }
    }
    
    public function update($id,$sl){
        if(isset($this->items[$id])){
            $this->items[$id]->Soluong = $sl;
            session(['cart'=> $this->items]);
        }        
    }
    public function clear(){
        session(['cart'=>null]);
    }

}
