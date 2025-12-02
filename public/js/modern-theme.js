/**
 * ToursTravel Kenya - Modern Theme JavaScript
 * Dark Mode Toggle & UI Enhancements
 */

(function () {
    'use strict';

    // Dark Mode Management
    const DarkMode = {
        init() {
            this.loadTheme();
            this.createToggleButton();
            this.attachEventListeners();
        },

        loadTheme() {
            const savedTheme = localStorage.getItem('theme') || 'light';
            document.documentElement.setAttribute('data-theme', savedTheme);
            this.updateToggleIcon(savedTheme);
        },

        toggleTheme() {
            const currentTheme = document.documentElement.getAttribute('data-theme');
            const newTheme = currentTheme === 'light' ? 'dark' : 'light';

            document.documentElement.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            this.updateToggleIcon(newTheme);

            // Dispatch custom event for theme change
            window.dispatchEvent(new CustomEvent('themeChanged', { detail: { theme: newTheme } }));
        },

        updateToggleIcon(theme) {
            const icon = document.getElementById('theme-toggle-icon');
            if (icon) {
                icon.className = theme === 'light' ? 'fas fa-moon' : 'fas fa-sun';
            }
        },

        createToggleButton() {
            const button = document.createElement('button');
            button.className = 'theme-toggle';
            button.setAttribute('aria-label', 'Toggle dark mode');
            button.innerHTML = '<i id="theme-toggle-icon" class="fas fa-moon"></i>';
            button.onclick = () => this.toggleTheme();
            document.body.appendChild(button);
        },

        attachEventListeners() {
            // Listen for system theme changes
            if (window.matchMedia) {
                window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
                    if (!localStorage.getItem('theme')) {
                        this.toggleTheme();
                    }
                });
            }
        }
    };

    // Scroll Progress Bar
    const ScrollProgress = {
        init() {
            this.createProgressBar();
            window.addEventListener('scroll', () => this.updateProgress());
        },

        createProgressBar() {
            const bar = document.createElement('div');
            bar.className = 'scroll-progress';
            bar.id = 'scroll-progress';
            document.body.appendChild(bar);
        },

        updateProgress() {
            const bar = document.getElementById('scroll-progress');
            if (!bar) return;

            const windowHeight = window.innerHeight;
            const documentHeight = document.documentElement.scrollHeight - windowHeight;
            const scrolled = window.scrollY;
            const progress = (scrolled / documentHeight) * 100;

            bar.style.transform = `scaleX(${progress / 100})`;
        }
    };

    // Fade-in Animations on Scroll
    const ScrollAnimations = {
        init() {
            this.observer = new IntersectionObserver(
                entries => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('visible');
                        }
                    });
                },
                { threshold: 0.1, rootMargin: '0px 0px -50px 0px' }
            );

            this.observe();
        },

        observe() {
            document.querySelectorAll('.fade-in-up, [data-aos]').forEach(el => {
                el.classList.add('fade-in-up');
                this.observer.observe(el);
            });
        }
    };

    // Toast Notifications
    const Toast = {
        show(message, type = 'info', duration = 3000) {
            const toast = document.createElement('div');
            toast.className = `toast toast-modern align-items-center text-white bg-${type} border-0`;
            toast.setAttribute('role', 'alert');
            toast.innerHTML = `
                <div class="d-flex">
                    <div class="toast-body">
                        <i class="fas fa-${this.getIcon(type)} me-2"></i>
                        ${message}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                </div>
            `;

            const container = this.getContainer();
            container.appendChild(toast);

            const bsToast = new bootstrap.Toast(toast, { delay: duration });
            bsToast.show();

            toast.addEventListener('hidden.bs.toast', () => {
                toast.remove();
            });
        },

        getIcon(type) {
            const icons = {
                'success': 'check-circle',
                'danger': 'exclamation-circle',
                'warning': 'exclamation-triangle',
                'info': 'info-circle'
            };
            return icons[type] || 'info-circle';
        },

        getContainer() {
            let container = document.getElementById('toast-container');
            if (!container) {
                container = document.createElement('div');
                container.id = 'toast-container';
                container.className = 'toast-container position-fixed bottom-0 end-0 p-3';
                container.style.zIndex = '1090';
                document.body.appendChild(container);
            }
            return container;
        }
    };

    // Stat Counter Animation
    const StatCounters = {
        init() {
            const counters = document.querySelectorAll('[data-count]');
            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-count'));
                this.animateCounter(counter, target);
            });
        },

        animateCounter(element, target) {
            let current = 0;
            const increment = target / 100;
            const duration = 2000;
            const stepTime = duration / 100;

            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    element.textContent = target.toLocaleString();
                    clearInterval(timer);
                } else {
                    element.textContent = Math.floor(current).toLocaleString();
                }
            }, stepTime);
        }
    };

    // Smooth Scroll to Anchors
    const SmoothScroll = {
        init() {
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', e => {
                    const href = anchor.getAttribute('href');
                    if (href === '#') return;

                    e.preventDefault();
                    const target = document.querySelector(href);
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        }
    };

    // Image Lazy Loading
    const LazyLoad = {
        init() {
            if ('loading' in HTMLImageElement.prototype) {
                // Native lazy loading support
                document.querySelectorAll('img[data-src]').forEach(img => {
                    img.src = img.getAttribute('data-src');
                    img.removeAttribute('data-src');
                });
            } else {
                // Fallback for older browsers
                this.observer = new IntersectionObserver(entries => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const img = entry.target;
                            img.src = img.getAttribute('data-src');
                            img.removeAttribute('data-src');
                            this.observer.unobserve(img);
                        }
                    });
                });

                document.querySelectorAll('img[data-src]').forEach(img => {
                    this.observer.observe(img);
                });
            }
        }
    };

    // Form Validation Enhancement
    const FormValidation = {
        init() {
            document.querySelectorAll('form').forEach(form => {
                form.addEventListener('submit', e => {
                    if (!form.checkValidity()) {
                        e.preventDefault();
                        e.stopPropagation();
                        this.showValidationErrors(form);
                    }
                    form.classList.add('was-validated');
                });
            });
        },

        showValidationErrors(form) {
            const invalidFields = form.querySelectorAll(':invalid');
            if (invalidFields.length > 0) {
                invalidFields[0].focus();
                Toast.show('Please fill in all required fields correctly', 'warning');
            }
        }
    };

    // Initialize everything when DOM is ready
    function init() {
        DarkMode.init();
        ScrollProgress.init();
        ScrollAnimations.init();
        SmoothScroll.init();
        LazyLoad.init();
        FormValidation.init();

        // Initialize stat counters if present
        if (document.querySelector('[data-count]')) {
            StatCounters.init();
        }
    }

    // Wait for DOM and Bootstrap to be ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

    // Expose Toast globally for use in other scripts
    window.ToursToast = Toast;

})();
