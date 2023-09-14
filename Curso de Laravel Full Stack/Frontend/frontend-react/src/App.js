import './App.css';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap-icons/font/bootstrap-icons.css';
import { Routes, Route, Link } from 'react-router-dom';
import AddMovie from './components/AddMovie';
import Movie from './components/Movie';

import MovieList from './components/MovieList';

function App() {
  return (
    <div>
      
      <nav className="navbar navbar-expand-lg navbar-light bg-light">
  <div className="container-fluid">
    <a className="navbar-brand" href="#">Navbar</a>
    <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span className="navbar-toggler-icon"></span>
    </button>
    <div className="collapse navbar-collapse" id="navbarSupportedContent">
      <ul className="navbar-nav me-auto mb-2 mb-lg-0">
        <li className="nav-item">
          <Link to={"/movies"} className="nav-link">Películas</Link>
        </li>
        <li className="nav-item">
        <Link to={"/add"} className="nav-link">Agregar</Link>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div className='container mt-3'>
  <Routes>
  {["/", "/movies"].map(path => (
    <Route 
      key="Home" // optional: avoid full re-renders on route changes
      path={path}
      element={<MovieList />}
    />
  ))}
    <Route exact path="/add" element={<AddMovie/>}></Route>
    <Route exact path="/movies/:id"element={<Movie/>}></Route>
    
  </Routes>
</div>
    </div>
  );
}

export default App;
