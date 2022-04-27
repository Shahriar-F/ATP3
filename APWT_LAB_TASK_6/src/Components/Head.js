
import React from "react";
import {Link} from "react-router-dom";
const Head = () => {
    return(
        <div>
           
            <Link to="/">Home  </Link>            
                      
            <Link to="/studentlist"> Student-list </Link> 

            <Link to="/contact"> Contact  </Link>  
                  
        </div>
    );
}   
export default Head;