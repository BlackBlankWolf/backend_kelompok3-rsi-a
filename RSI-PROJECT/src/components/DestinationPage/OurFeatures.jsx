import React from "react";
import { Link } from "react-router-dom";
import { FcCalculator } from "react-icons/fc";


const Deskripsi = () => {
    return(
        <div className="text-center flex-col flex font-poppins w-full bg-orange-100 p-16 h-[500px]">
            
            <div className="">
                <h1 className="font-bold text-2xl">Fitur Kami</h1>
            </div>

            <div className="flex justify-center">
                <div className="cursor-pointer hover:bg-orange-200 p-6 m-10 bg-orange-50 rounded-lg w-[250px] flex justify-center">
                    <Link to='/kalkulator'>
                        <FcCalculator size={200} />
                        <p className="text-neutral-700 font-bold text-xl hover:text-neutral-500">Kalkulator BMI</p>  
                    </Link>
                </div>
            </div>

            
        </div>
    )
}

export default Deskripsi;