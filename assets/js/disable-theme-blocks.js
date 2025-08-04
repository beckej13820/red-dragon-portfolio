import { blockFilters } from '@wordpress/blocks';

const THEME_BLOCKS = [
    'core/navigation',
    'core/site-logo',
    'core/site-title',
    'core/site-tagline',
    'core/query',
    'core/avatar',
    'core/post-title',
    'core/post-excerpt',
    'core/post-featured-image',
    'core/post-author',
    'core/post-author-name',
    'core/post-date',
    'core/post-modified-date',
    'core/post-terms',
    'core/post-categories',
    'core/post-tags',
    'core/post-navigation-link',
    'core/next-post',
    'core/previous-post',
    'core/read-more',
    'core/comments',
    'core/comment-form',
    'core/loginout',
    'core/term-description',
    'core/archive-title',
    'core/search-results-title',
    'core/author-biography'
];

blockFilters.registerBlockVariationFilter( 'core', ( settings ) => {
    if (wp?.data?.select('core/edit-post')) {
        const currentEditor = wp.data.select('core/edit-post').getEditorMode();
        if (currentEditor === 'post-editor') {
            return {
                ...settings,
                variations: (settings.variations || []).filter(
                    (variation) => !THEME_BLOCKS.includes(variation.name)
                )
            };
        }
    }
    return settings;
});

THEME_BLOCKS.forEach((blockName) => {
    wp.blocks.unregisterBlockType(blockName);
});
