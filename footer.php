<footer class="site-footer">
    <div class="footer-content">
        <div class="social-links">
            <a href="https://wa.me/254724871460" target="_blank" class="social-item">
                <i class="fab fa-whatsapp"></i>
                <span>0724 871 460</span>
            </a>
            
            <a href="https://www.instagram.com/malesh_hussen_35" target="_blank" class="social-item">
                <i class="fab fa-instagram"></i>
                <span>@malesh_hussen_35</span>
            </a>
            
            <a href="https://github.com/maleshhussen35" target="_blank" class="social-item">
                <i class="fab fa-github"></i>
                <span>maleshhussen35</span>
            </a>
        </div>
        
        <div class="copyright">
            <p>&copy; <?php echo date('Y'); ?> MALESH. All rights reserved</p>
        </div>
    </div>
</footer>

<style>
    .site-footer {
        background: #111111;
        padding: 2rem 1rem;
        margin-top: auto;
        border-top: 1px solid #333;
    }

    .footer-content {
        max-width: 1200px;
        margin: 0 auto;
        text-align: center;
    }

    .social-links {
        display: flex;
        justify-content: center;
        gap: 3rem;
        margin-bottom: 1.5rem;
        flex-wrap: wrap;
    }

    .social-item {
        color: #00ff9d;
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 0.8rem;
        padding: 0.8rem 1.5rem;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .social-item:hover {
        background: rgba(0, 255, 157, 0.1);
        transform: translateY(-2px);
    }

    .social-item i {
        font-size: 1.5rem;
        transition: transform 0.3s ease;
    }

    .social-item:hover i {
        transform: scale(1.2);
        text-shadow: 0 0 15px rgba(0,255,157,0.3);
    }

    .social-item span {
        font-size: 1rem;
        letter-spacing: 0.5px;
    }

    .copyright {
        margin-top: 2rem;
        padding-top: 1.5rem;
        border-top: 1px solid #333;
        color: #777;
        font-size: 0.9rem;
    }

    .copyright p {
        margin: 0;
    }

    @media (max-width: 768px) {
        .social-links {
            gap: 1.5rem;
            flex-direction: column;
        }
        
        .social-item {
            justify-content: center;
        }
    }
</style>
</body>
</html>