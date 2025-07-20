<div class="sidebar themes border p-2 md:justify-items-end md:min-w-48 flex flex-row md:flex-col flex-wrap">
  <x-Button label="new generation" href="#" onclick="switchTheme('newgeneration', this)" classes="{{ Cookie::get('theme') == 'newgeneration' ? 'button-selected' : '' }}" />
  <x-Button label="classic look" href="#" onclick="switchTheme('classic', this)" classes="{{ Cookie::get('theme') == 'classic' ? 'button-selected' : '' }}" />
  <x-Button label="catppuccin latte" href="#" onclick="switchTheme('catppiccinlatte', this)" classes="{{ Cookie::get('theme') == 'catppiccinlatte' ? 'button-selected' : '' }}" />
  <x-Button label="oshawatt's domain" href="#" onclick="switchTheme('oshawatt', this)" classes="{{ Cookie::get('theme') == 'oshawatt' ? 'button-selected' : '' }}" />
  <x-Button label="unstyledish" href="#" onclick="switchTheme('eink', this)" classes="{{ Cookie::get('theme') == 'eink' ? 'button-selected' : '' }}" />
  <x-Button label="base2tone desert" href="#" onclick="switchTheme('base2tonedesert', this)" classes="{{ Cookie::get('theme') == 'base2tonedesert' ? 'button-selected' : '' }}" />
  <x-Button label="pastel bonanza" href="#" onclick="switchTheme('pastelbonanza', this)" classes="{{ Cookie::get('theme') == 'pastelbonanza' ? 'button-selected' : '' }}" />
</div>