import React, { useState } from 'react';
import './Register.css';

const Register = () => {
  const [formData, setFormData] = useState({
    tipoDocumento: '',
    cedula: '',
    nombres: '',
    apellidos: '',
    fechaNacimiento: '',
    ciudadNacimiento: '',
    email: '',
    password: '',
  });

  const handleChange = (e) => {
    const { name, value } = e.target;
    setFormData({ ...formData, [name]: value });
  };

  const handleSubmit = (e) => {
    e.preventDefault();
    console.log('Datos de registro:', formData);
  };

  return (
    <div className="register-container">
      <h2>Registro de Usuario</h2>
      <p>Completa todos los campos para registrarte en nuestra plataforma.</p>
      <form onSubmit={handleSubmit}>
        <div className="form-section">
          <h3>Información Personal</h3>
          <div className="form-group">
            <label htmlFor="tipoDocumento">Tipo de Documento</label>
            <select
              id="tipoDocumento"
              name="tipoDocumento"
              value={formData.tipoDocumento}
              onChange={handleChange}
              required
            >
              <option value="">Seleccione...</option>
              <option value="CC">Cédula de Ciudadanía</option>
              <option value="TI">Tarjeta de Identidad</option>
            </select>
          </div>
          <div className="form-group">
            <label htmlFor="cedula">Número de Documento</label>
            <input
              type="text"
              id="cedula"
              name="cedula"
              value={formData.cedula}
              onChange={handleChange}
              required
            />
          </div>
          <div className="form-group">
            <label htmlFor="nombres">Nombres</label>
            <input
              type="text"
              id="nombres"
              name="nombres"
              value={formData.nombres}
              onChange={handleChange}
              required
            />
          </div>
          <div className="form-group">
            <label htmlFor="apellidos">Apellidos</label>
            <input
              type="text"
              id="apellidos"
              name="apellidos"
              value={formData.apellidos}
              onChange={handleChange}
              required
            />
          </div>
          <div className="form-group">
            <label htmlFor="fechaNacimiento">Fecha de Nacimiento</label>
            <input
              type="date"
              id="fechaNacimiento"
              name="fechaNacimiento"
              value={formData.fechaNacimiento}
              onChange={handleChange}
              required
            />
          </div>
          <div className="form-group">
            <label htmlFor="ciudadNacimiento">Ciudad de Nacimiento</label>
            <select
              id="ciudadNacimiento"
              name="ciudadNacimiento"
              value={formData.ciudadNacimiento}
              onChange={handleChange}
              required
            >
              <option value="">Seleccione...</option>
              <option value="Bogotá">Bogotá</option>
              <option value="Medellín">Medellín</option>
              <option value="Cali">Cali</option>
            </select>
          </div>
        </div>

        <div className="form-section">
          <h3>Información de Cuenta</h3>
          <div className="form-group">
            <label htmlFor="email">Correo Electrónico</label>
            <input
              type="email"
              id="email"
              name="email"
              value={formData.email}
              onChange={handleChange}
              required
            />
          </div>
          <div className="form-group">
            <label htmlFor="password">Contraseña</label>
            <input
              type="password"
              id="password"
              name="password"
              value={formData.password}
              onChange={handleChange}
              required
            />
          </div>
        </div>

        <button type="submit" className="submit-button">Registrarse</button>
      </form>
    </div>
  );
};

export default Register;
