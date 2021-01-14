<!-- Block zoom -->
<div id="zoom_block_home" class="block">
  <h4>{l s='Welcome!' mod='zoom'}</h4>
  <div class="block_content">
    <p>Hello,
           {if isset($my_module_name) && $my_module_name}
               {$my_module_name}
           {else}
               World
           {/if}
           !
    </p>
  </div>
</div>
<!-- /Block zoom -->