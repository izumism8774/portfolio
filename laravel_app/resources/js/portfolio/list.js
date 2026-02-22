document.addEventListener('DOMContentLoaded', () => {

    document.querySelectorAll('.tab-btn').forEach(btn => {

        btn.addEventListener('click', function() {

            document.querySelectorAll('.tab-btn')
                .forEach(b => b.classList.remove('active'));

            this.classList.add('active');

            const category = this.dataset.category;

            document.querySelectorAll('.portfolio-card')
                .forEach(card => {

                    if (category === 'all' ||
                        card.dataset.category === category) {

                        card.style.display = '';

                    } else {

                        card.style.display = 'none';

                    }

                });

        });

    });

});
