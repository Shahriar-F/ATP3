import { Navbar, Nav } from 'react-bootstrap'
import { Link } from 'react-router-dom'
function Header() {
    return (
        <div>
            <Navbar bg="dark" variant="dark">
                
                    <Navbar.Brand href="#home">Delivery Man</Navbar.Brand>
                    <Nav className="me-auto">
                        <Nav.Link href="#home">Home</Nav.Link>

                        <Link to="/login">Login</Link>
                        <Link to="/register">Register</Link>
                        
                    </Nav>
                
            </Navbar>

        </div>
    )
}

export default Header