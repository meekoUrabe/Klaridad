 const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.style.opacity = '1';
        e.target.style.transform = 'translateY(0)';
        observer.unobserve(e.target);
      }
    });
  }, { threshold: 0.12 });

  document.querySelectorAll('.card, .step, .role-card, .stat-num').forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(24px)';
    el.style.transition = 'opacity .55s ease, transform .55s ease';
    observer.observe(el);
  });

  function animateCount(el, target) {
    const duration = 1800;
    const start = performance.now();
    const isComma = target >= 1000;

    function tick(now) {
      const t = Math.min((now - start) / duration, 1);
      const ease = 1 - Math.pow(1 - t, 3);
      const val = Math.round(ease * target);
      el.textContent = isComma ? val.toLocaleString() : val;
      if (t < 1) requestAnimationFrame(tick);
    }
    requestAnimationFrame(tick);
  }

  const statsObs = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        const nums = [324, 12547, 1892, 24];
        e.target.querySelectorAll('.stat-num').forEach((el, i) => {
          animateCount(el, nums[i]);
        });
        statsObs.unobserve(e.target);
      }
    });
  }, { threshold: 0.3 });

  const statsGrid = document.querySelector('.stats-grid');
  if (statsGrid) {
    statsGrid.querySelectorAll('.stat-num').forEach(el => el.textContent = '0');
    statsObs.observe(statsGrid.parentElement);
  }