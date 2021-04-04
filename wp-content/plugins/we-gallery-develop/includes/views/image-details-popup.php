<div id="wtgal-popup-box" class="wtgal-poup-container" style="display: none;">

    <div class="wtgal-box-head">
        <?php _e( 'Update Image Details' ); ?>
        <div class="wtgal-popup-close"></div>
    </div>

    <div class="wtgal-box-inside">
        <div id="wtgal-ajax-content">
            <span class="spinner"></span>
        </div>
    </div>

    <div class="wtgal-popup-buttons">
        <?php submit_button( __( 'Update Image' ), 'button-primary alignright', 'wtgal-image-update', false ); ?>
        <div class="clear"></div>
    </div>
</div>

<div id="wtgal-popup-overlay" style="display: none;"></div>

<script id="wtgal-tmpl-image-editor" type="text/template">
    <div class="wtgal-input-box">
        <label for="wtgal-input-title"><?php _e( 'Title', 'wtgal' ); ?></label>
        <input type="text" value="<%= image.title %>" id="wtgal-input-title">
    </div>

    <div class="wtgal-input-box">
        <label for="wtgal-input-caption"><?php _e( 'Caption', 'wtgal' ); ?></label>
        <textarea id="wtgal-input-caption" cols="30" rows="3"><%= image.caption %></textarea>
    </div>

    <div class="wtgal-input-box">
        <label for="wtgal-input-alt"><?php _e( 'Alt Text', 'wtgal' ); ?></label>
        <input type="text" value="<%= image.alt %>" id="wtgal-input-alt">
    </div>

    <div class="wtgal-input-box">
        <label for="wtgal-input-description"><?php _e( 'Description', 'wtgal' ); ?></label>
        <textarea id="wtgal-input-description" cols="30" rows="3"><%= image.description %></textarea>
    </div>

    <div class="wtgal-input-box">
        <label for="wtgal-input-tags"><?php _e( 'Tags', 'wtgal' ); ?></label>
        <input type="text" value="<%= image.tags %>" id="wtgal-input-tags">
    </div>

    <input type="hidden" id="wtgal-input-att-id" value="<%= image.id %>">
</script>