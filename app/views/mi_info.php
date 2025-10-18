<?php include 'layout_header.php'; ?>

<section class="info-header">
    <h2><?php echo $titulo; ?></h2>
    <p class="subtitle">Documentando la Semana de Sistemas 2025 - Universidad de El Salvador</p>
</section>

<section class="content-section">
    <div class="card profile-card">
        <div class="profile-header">
            <div class="profile-image-container">
                <img src="/images/perfil.jpg" alt="Foto de perfil de <?php echo $nombre; ?>" class="profile-photo">
                <div class="profile-badge">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                    </svg>
                </div>
            </div>
            <div class="profile-title">
                <h3><?php echo $nombre; ?></h3>
                <p class="profile-subtitle">Estudiante de Ingeniería de Sistemas Informáticos</p>
                <p class="profile-subtitle">Facultad Multidisciplinaria Oriental - UES</p>
            </div>
        </div>

        <div class="profile-content">
            <div class="info-section">
                <h4>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align: middle; margin-right: 0.5rem;">
                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                    </svg>
                    Información Académica
                </h4>
                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-icon-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                        </div>
                        <div class="info-text">
                            <strong>Carnet Universitario</strong>
                            <p><?php echo $carnet; ?></p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 10v6M2 10l10-5 10 5-10 5z"></path>
                                <path d="M6 12v5c3 3 9 3 12 0v-5"></path>
                            </svg>
                        </div>
                        <div class="info-text">
                            <strong>Carrera</strong>
                            <p><?php echo $carrera; ?></p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                        </div>
                        <div class="info-text">
                            <strong>Universidad</strong>
                            <p><?php echo $universidad; ?></p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </div>
                        <div class="info-text">
                            <strong>Facultad</strong>
                            <p><?php echo $facultad; ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="info-section">
                <h4>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align: middle; margin-right: 0.5rem;">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg>
                    Información de Contacto
                </h4>
                <div class="contact-info">
                    <div class="contact-item">
                        <span class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                        </span>
                        <a href="mailto:<?php echo $email; ?>" class="contact-link"><?php echo $email; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'layout_footer.php'; ?>
