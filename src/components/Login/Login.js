import React from 'react';
import { Link } from 'react-router-dom';

function Login() {
  return (
    <div>
      <h1> Bienvenido </h1>
     <h2> Iniciar sesion</h2>
      <form>
        <div>
          <label>Correo Electrónico</label>
          <input type="email" placeholder="Ingresa tu correo" />
        </div>
        <div>
          <label>Contraseña</label>
          <input type="password" placeholder="Ingresa tu contraseña" />
        </div>
        <button type="submit">Ingresar</button>
      </form>
      <p>
        ¿No tienes cuenta? <Link to="/register">Regístrate aquí</Link>
      </p>
    </div>
  );
}

export default Login;
