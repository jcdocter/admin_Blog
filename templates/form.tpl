{extends file="templates/layout.tpl"}

{if $melding}
    {include file='templates/melding.tpl'}
{/if}

{block name="content"}
    <form action="index.php?action=edit" method="post">
        Titel<input name="titel" type="text" value="{$blog.titel}"><br>
        Datum<input name="datum" type="datetime" value="{$blog.datum}" <br>
        Body<input name="body" type="text" value="{$blog.body}" <br>
        <input type="submit" name="submit" value="Voeg Toe">
    </form>
{/block}