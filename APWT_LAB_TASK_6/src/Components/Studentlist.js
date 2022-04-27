import React from "react";
import {Link} from "react-router-dom";
import Student from './Student';


const Studentlist = () => {
    return(

        <div>
                <Link to="/1"><Student name="Bruce" id ="1" cgpa ="3.8"/></Link>
                <Link to="/2"><Student name="Ferran" id ="2" cgpa ="3.55"/></Link>
                <Link to="/3"><Student name="Gina" id ="3" cgpa="3.64"/></Link>
                <Link to="/4"><Student name="Ricky" id ="4" cgpa="3.11"/></Link>
                <Link to="/5"><Student name="Lieke" id ="5" cgpa="3.88"/></Link>
        </div>
    );
}
export default Studentlist;
