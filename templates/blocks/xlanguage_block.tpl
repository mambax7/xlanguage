<div style="text-align: center; margin-left: auto; margin-right: auto;">
    <{if $block.display == "images" || ($block.display == "text")}>
        <{foreach item=lang from=$block.languages|default:null name=lang_it }>
            <a href="<{$block.url}><{$lang.name}>" title="<{$lang.desc}>">
                <{if $block.display == "images"}><img src="<{$lang.image}>" alt="<{$lang.desc}>" <{if $block.selected != $lang.name}>style="-moz-opacity: .8; opacity: .8; filter:Alpha(opacity=80);"<{/if}>><{else}><{$lang.desc}><{/if}></a>
            <{if $block.number != 0 && $smarty.foreach.lang_it.iteration % $block.number == 0}>
                <br>
            <{/if}>
        <{/foreach}>
    <{else}>
        <select name="selectlang"
                onChange="if(this.options[this.selectedIndex].value.length >0 ){ window.document.location=this.options[this.selectedIndex].value;}"
        >
            <{foreach item=lang from=$block.languages|default:null name=lang_it }>
                <option value="<{$block.url}><{$lang.name}>"
                        <{if $block.selected == $lang.name}>selected<{/if}>
                ><{$lang.desc}></option>
            <{/foreach}>
        </select>
    <{/if}>
</div>
