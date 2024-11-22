<div class="field">
    <label for="custom_head_content"> &lt;head&gt; custom content:</label>
    <div class="inputs">
        <textarea name="custom_head_content" id="custom_head_content" rows="10" class="textinput"><?php echo html_escape(get_option('custom_head_content')); ?></textarea>
        <p class="explanation">Add here any HTML, CSS or JavaScript content you wish to include in the <code>&lt;head&gt;</code> section of the public pages. This may include, for example, analytics tracking codes, external CSS styles, or JavaScript libraries.</p>
    </div>
</div>
