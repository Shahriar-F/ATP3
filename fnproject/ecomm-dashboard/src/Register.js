/*import React ,{useState} from 'react'
function Register(){

    const [name,setName]=useState("")
    const [dob,setDob]=useState("")
    const [phone,setPhone]=useState("")
    const [email,setEmail]=useState("")
    const [password,setPassword]=useState("")

    async function signUp(){
        let item={name,dob,phone,email,password}
        console.warn(item)

       let result=await fetch('http://localhost:8000/api/register',
        method:'POST',
        body:JSON.stringify(item),
        headers:{
            "Content-Type":'application/json',
            "Accept":'aplication/json'

        })
        result =await result.jason()
        console.warn("result",result)

    }
    return(
        <div>
            <h1>Register page</h1>
        
        <input type="text" value={name} onChange={(e)=>setName(e.target.value)} className="form-control" placeholder="name" />
        <br/>
        <input type="text" value={dob} onChange={(e)=>setDob(e.target.value)} className="form-control" placeholder="dob" />
        <br/>
        <input type="text" value={phone} onChange={(e)=>setPhone(e.target.value)} className="form-control" placeholder="phone" />
        <br/>
        <input type="text" value={email} onChange={(e)=>setEmail(e.target.value)} className="form-control" placeholder="email" />
        <br/>
        <input type="text" value={password} onChange={(e)=>setPassword(e.target.value)} className="form-control" placeholder="password" />
        <br/>
        </div>
    )
}

export default Register*/