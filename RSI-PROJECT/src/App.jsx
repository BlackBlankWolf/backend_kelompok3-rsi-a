import {BrowserRouter as Router, Routes, Route} from 'react-router-dom';
import LandingPage from './pages/LandingPage'
import Login from './pages/Login';
import Register from './pages/Register';
import Kalkulator from './pages/Kalkulator';

function App() {
  return (
      <Router>
        <Routes>
          <Route path='/' element={<LandingPage/>}></Route>
          <Route path='/login' element={<Login/>}></Route>
          <Route path='/register' element={<Register/>}></Route>
          <Route path='/kalkulator' element={<Kalkulator/>}></Route>
        </Routes>
      </Router>
    )
}

export default App;
