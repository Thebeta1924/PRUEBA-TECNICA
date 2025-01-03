import React from 'react';
import { Link } from 'react-router-dom';
import './Login.css';

function Login() {
  return (
    <div className="login-container">
      <div className="login-header">
        <h1>Bienvenido</h1>
        <p>Por favor, inicia sesión para continuar</p>
      </div>
      <form className="login-form">
        <div className="form-group">
          <label htmlFor="email">Correo Electrónico</label>
          <input type="email" id="email" placeholder="Ingresa tu correo" />
        </div>
        <div className="form-group">
          <label htmlFor="password">Contraseña</label>
          <input type="password" id="password" placeholder="Ingresa tu contraseña" />
        </div>
        <button type="submit">Ingresar</button>
      </form>
      <p className="register-link">
        ¿No tienes cuenta? <Link to="/register">Regístrate aquí</Link>
      </p>
    </div>
  );
}

export default Login;
