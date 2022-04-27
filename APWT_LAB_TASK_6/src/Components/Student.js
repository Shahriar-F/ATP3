import React from "react"


const Student = (props) =>{
    return(
        <div>
             <table>
                
              <p>Student: <b>{props.name};</b> ID: <b>{props.id} ;</b> CGPA: <b>{props.cgpa}</b></p>
              
              </table>
        </div>
    );
}

export default Student;