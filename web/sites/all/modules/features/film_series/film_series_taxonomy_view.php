// this is the text export of the overridden taxonomy term view for cinema

$view = new view();
$view->name = 'taxonomy_term';
$view->description = 'A view to emulate Drupal core\'s handling of taxonomy/term.';
$view->tag = 'default';
$view->base_table = 'node';
$view->human_name = 'Taxonomy term';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'perm';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['query']['options']['query_comment'] = FALSE;
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'full';
$handler->display->display_options['style_plugin'] = 'default';
$handler->display->display_options['row_plugin'] = 'node';
/* Sort criterion: Content: Sticky */
$handler->display->display_options['sorts']['sticky']['id'] = 'sticky';
$handler->display->display_options['sorts']['sticky']['table'] = 'node';
$handler->display->display_options['sorts']['sticky']['field'] = 'sticky';
$handler->display->display_options['sorts']['sticky']['order'] = 'DESC';
/* Sort criterion: Content: Post date */
$handler->display->display_options['sorts']['created']['id'] = 'created';
$handler->display->display_options['sorts']['created']['table'] = 'node';
$handler->display->display_options['sorts']['created']['field'] = 'created';
$handler->display->display_options['sorts']['created']['order'] = 'DESC';
/* Contextual filter: Content: Has taxonomy term ID (with depth) */
$handler->display->display_options['arguments']['term_node_tid_depth']['id'] = 'term_node_tid_depth';
$handler->display->display_options['arguments']['term_node_tid_depth']['table'] = 'node';
$handler->display->display_options['arguments']['term_node_tid_depth']['field'] = 'term_node_tid_depth';
$handler->display->display_options['arguments']['term_node_tid_depth']['default_action'] = 'not found';
$handler->display->display_options['arguments']['term_node_tid_depth']['exception']['title_enable'] = TRUE;
$handler->display->display_options['arguments']['term_node_tid_depth']['title_enable'] = TRUE;
$handler->display->display_options['arguments']['term_node_tid_depth']['title'] = '%1';
$handler->display->display_options['arguments']['term_node_tid_depth']['default_argument_type'] = 'fixed';
$handler->display->display_options['arguments']['term_node_tid_depth']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['term_node_tid_depth']['specify_validation'] = TRUE;
$handler->display->display_options['arguments']['term_node_tid_depth']['validate']['type'] = 'taxonomy_term';
$handler->display->display_options['arguments']['term_node_tid_depth']['depth'] = '0';
$handler->display->display_options['arguments']['term_node_tid_depth']['break_phrase'] = TRUE;
/* Contextual filter: Content: Has taxonomy term ID depth modifier */
$handler->display->display_options['arguments']['term_node_tid_depth_modifier']['id'] = 'term_node_tid_depth_modifier';
$handler->display->display_options['arguments']['term_node_tid_depth_modifier']['table'] = 'node';
$handler->display->display_options['arguments']['term_node_tid_depth_modifier']['field'] = 'term_node_tid_depth_modifier';
$handler->display->display_options['arguments']['term_node_tid_depth_modifier']['exception']['title_enable'] = TRUE;
$handler->display->display_options['arguments']['term_node_tid_depth_modifier']['default_argument_type'] = 'fixed';
$handler->display->display_options['arguments']['term_node_tid_depth_modifier']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['term_node_tid_depth_modifier']['specify_validation'] = TRUE;
/* Filter criterion: Content: Published or admin */
$handler->display->display_options['filters']['status_extra']['id'] = 'status_extra';
$handler->display->display_options['filters']['status_extra']['table'] = 'node';
$handler->display->display_options['filters']['status_extra']['field'] = 'status_extra';
$handler->display->display_options['filters']['status_extra']['group'] = 0;
$handler->display->display_options['filters']['status_extra']['expose']['operator'] = FALSE;

/* Display: Page */
$handler = $view->new_display('page', 'Page', 'page');
$handler->display->display_options['defaults']['style_plugin'] = FALSE;
$handler->display->display_options['style_plugin'] = 'default';
$handler->display->display_options['defaults']['style_options'] = FALSE;
$handler->display->display_options['defaults']['row_plugin'] = FALSE;
$handler->display->display_options['row_plugin'] = 'node';
$handler->display->display_options['row_options']['view_mode'] = 'list';
$handler->display->display_options['defaults']['row_options'] = FALSE;
$handler->display->display_options['defaults']['header'] = FALSE;
/* Header: Global: View area */
$handler->display->display_options['header']['view']['id'] = 'view';
$handler->display->display_options['header']['view']['table'] = 'views';
$handler->display->display_options['header']['view']['field'] = 'view';
$handler->display->display_options['header']['view']['label'] = 'Terms';
$handler->display->display_options['header']['view']['view_to_insert'] = 'film_series_name:block';
$handler->display->display_options['defaults']['footer'] = FALSE;
/* Footer: Entity: Rendered entity */
$handler->display->display_options['footer']['entity']['id'] = 'entity';
$handler->display->display_options['footer']['entity']['table'] = 'entity__global';
$handler->display->display_options['footer']['entity']['field'] = 'entity';
$handler->display->display_options['footer']['entity']['label'] = 'current term';
$handler->display->display_options['footer']['entity']['entity_type'] = 'taxonomy_term';
$handler->display->display_options['footer']['entity']['entity_id'] = '%1';
$handler->display->display_options['footer']['entity']['bypass_access'] = 0;
$handler->display->display_options['path'] = 'taxonomy/term/%';

/* Display: Feed */
$handler = $view->new_display('feed', 'Feed', 'feed');
$handler->display->display_options['pager']['type'] = 'full';
$handler->display->display_options['pager']['options']['items_per_page'] = 15;
$handler->display->display_options['style_plugin'] = 'rss';
$handler->display->display_options['row_plugin'] = 'node_rss';
$handler->display->display_options['path'] = 'taxonomy/term/%/%/feed';
$handler->display->display_options['displays'] = array(
  'page' => 'page',
  'default' => 0,
);
