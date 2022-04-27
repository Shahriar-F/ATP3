import React from "react";
import { useParams } from "react-router-dom";

const StudentDetails = () => {
    const {id} = useParams();
    return(

        <div>

          <h2>Details of Student </h2>
          <h2>ID: {id}</h2>
    
        
        </div>
    );
}
export default StudentDetails;

