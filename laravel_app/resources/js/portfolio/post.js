// resources/js/portfolio/post.js

document.addEventListener('DOMContentLoaded', () => {
  // 画像プレビュー
  const input = document.getElementById('image');
  const preview = document.getElementById('preview');
  const hint = document.getElementById('hint');

  // 要素がないページで動かないようにガード（超大事）
  if (input && preview && hint) {
    input.addEventListener('change', () => {
      const file = input.files?.[0];
      if (!file) return;
      const url = URL.createObjectURL(file);
      preview.src = url;
      preview.style.display = 'block';
      hint.style.display = 'none';
    });
  }

  // categoryは単一選択
  document.querySelectorAll('.chips[data-group="category"] .chip').forEach((btn) => {
    btn.addEventListener('click', () => {
      document
        .querySelectorAll('.chips[data-group="category"] .chip')
        .forEach((b) => b.classList.remove('is-active'));
      btn.classList.add('is-active');
    });
  });

  // stack/tagsはトグル
  document
    .querySelectorAll('.chips[data-group="stack"] .chip, .chips[data-group="tags"] .chip')
    .forEach((btn) => {
      btn.addEventListener('click', () => btn.classList.toggle('is-active'));
    });
});
