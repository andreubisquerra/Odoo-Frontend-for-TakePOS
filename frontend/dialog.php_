<?php
header("Content-type: text/xml");
?>
<templates>
<div t-name="EmptyComponent"/>
<div class="o_loading" t-name="Loading"/>
<t t-name="WidgetLabel.tooltip">
<div class="oe_tooltip_string" t-if="widget.string">
<t t-esc="widget.string"/>
<t t-if="debug and widget.nolabel">(nolabel)</t>
</div>
<p class="oe_tooltip_help" t-if="widget.attrs.help || widget.field.help">
<t t-esc="widget.attrs.help || widget.field.help"/>
</p>
<ul class="oe_tooltip_technical" t-if="debug">
<li data-item="field" t-if="widget.name">
<span class="oe_tooltip_technical_title">Field:</span>
<t t-esc="widget.name"/>
</li>
<li data-item="object">
<span class="oe_tooltip_technical_title">Object:</span>
<t t-esc="widget.model"/>
</li>
<li data-item="type">
<span class="oe_tooltip_technical_title">Type:</span>
<t t-esc="widget.field.type"/>
</li>
<li data-item="widget" t-if="widget.attrs.widget">
<span class="oe_tooltip_technical_title">Widget:</span>
<t t-esc="widget.attrs.widget"/>
</li>
<li data-item="size" t-if="widget.attrs.size || widget.field.size">
<span class="oe_tooltip_technical_title">Size:</span>
<t t-esc="widget.attrs.size || widget.field.size"/>
</li>
<li data-item="context" t-if="widget.attrs.context || widget.field.context">
<span class="oe_tooltip_technical_title">Context:</span>
<t t-esc="widget.attrs.context || JSON.stringify(widget.field.context)"/>
</li>
<li data-item="domain" t-if="widget.attrs.domain || widget.field.domain">
<span class="oe_tooltip_technical_title">Domain:</span>
<t t-esc="widget.attrs.domain || JSON.stringify(widget.field.domain)"/>
</li>
<li data-item="modifiers" t-if="widget.attrs.modifiers and !_.isEmpty(widget.attrs.modifiers)">
<span class="oe_tooltip_technical_title">Modifiers:</span>
<t t-esc="JSON.stringify(widget.attrs.modifiers)"/>
</li>
<li data-item="change_default" t-if="widget.field and widget.field.change_default">
<span class="oe_tooltip_technical_title">Change default:</span>
Yes
</li>
<li data-item="on_change" t-if="widget.attrs.on_change">
<span class="oe_tooltip_technical_title">On change:</span>
<t t-esc="widget.attrs.on_change"/>
</li>
<li data-item="relation" t-if="widget.field and widget.field.relation">
<span class="oe_tooltip_technical_title">Relation:</span>
<t t-esc="widget.field.relation"/>
</li>
<li data-item="selection" t-if="widget.field and widget.field.selection">
<span class="oe_tooltip_technical_title">Selection:</span>
<ul class="oe_tooltip_technical">
<li t-as="option" t-foreach="widget.field.selection">
[
<t t-esc="option[0]"/>
]
<t t-if="option[1]"> - </t>
<t t-esc="option[1]"/>
</li>
</ul>
</li>
</ul>
</t>
<t t-name="WidgetButton.tooltip">
<div class="oe_tooltip_string" t-if="debug || node.attrs.string">
<t t-if="debug">
Button
<t t-if="node.attrs.string">: </t>
<t t-if="!node.attrs.string"> (no string)</t>
</t>
<t t-esc="node.attrs.string"/>
</div>
<p class="oe_tooltip_help" t-if="node.attrs.help">
<t t-esc="node.attrs.help"/>
</p>
<ul class="oe_tooltip_technical" t-if="debug">
<li data-item="object">
<span class="oe_tooltip_technical_title">Object:</span>
<t t-esc="state.model"/>
</li>
<li data-item="context" t-if="node.attrs.context">
<span class="oe_tooltip_technical_title">Context:</span>
<t t-esc="node.attrs.context || widget.field.context"/>
</li>
<li data-item="modifiers" t-if="node.attrs.modifiers and !_.isEmpty(node.attrs.modifiers)">
<span class="oe_tooltip_technical_title">Modifiers:</span>
<t t-esc="JSON.stringify(node.attrs.modifiers)"/>
</li>
<li data-item="special" t-if="node.attrs.special">
<span class="oe_tooltip_technical_title">Special:</span>
<t t-esc="node.attrs.special"/>
</li>
<t t-set="button_type" t-value="node.attrs.type"/>
<li data-item="button_type" t-if="button_type">
<span class="oe_tooltip_technical_title">Button Type:</span>
<t t-esc="button_type"/>
</li>
<li data-item="button_method" t-if="button_type === 'object'">
<span class="oe_tooltip_technical_title">Method:</span>
<t t-esc="node.attrs.name"/>
</li>
<li data-item="button_action" t-if="button_type === 'action'">
<span class="oe_tooltip_technical_title">Action ID:</span>
<t t-esc="node.attrs.name"/>
</li>
</ul>
</t>
<t t-name="Notification">
<div t-attf-class="o_notification #{className}" t-translation="off">
<a class="fa fa-times o_close" href="#" t-if="widget.sticky"/>
<div class="o_notification_title">
<span class="o_icon fa fa-3x fa-lightbulb-o"/>
<t t-raw="widget.title"/>
</div>
<div class="o_notification_content" t-if="widget.text">
<t t-raw="widget.text"/>
</div>
</div>
</t>
<t t-extend="Notification" t-name="Warning">
<t t-jquery=".o_icon" t-operation="replace">
<span class="o_icon fa fa-3x fa-exclamation"/>
</t>
</t>
<div class="o_dialog_warning" t-name="CrashManager.warning">
<t t-js="d">
var message = (d.message !== undefined) ? d.message : d.error.data.message; d.html_error = context.engine.tools.html_escape(message).replace(/\n/g, '
<br/>
');
</t>
<t t-raw="html_error"/>
</div>
<div class="o_dialog_error" t-name="CrashManager.error">
<div class="alert alert-warning clearfix" role="alert">
<button class="btn btn-sm btn-primary pull-right ml8 o_clipboard_button">
<i class="fa fa-clipboard mr8"/>
Copy the full error to clipboard
</button>
<p>
<b>An error occurred</b>
</p>
<p>
Please use the copy button to report the error to your support service.
</p>
</div>
<t t-set="errUID" t-value="_.uniqueId()"/>
<button class="btn btn-sm btn-link" data-toggle="collapse" t-att-data-target="'#o_error_detail' + errUID">See details</button>
<div class="collapse alert alert-danger o_error_detail" t-att-id="'o_error_detail' + errUID">
<pre>
<t t-esc="error.message"/>
</pre>
<pre>
<t t-esc="error.data.debug"/>
</pre>
</div>
</div>
<form method="POST" name="change_password_form" t-name="ChangePassword">
<div class="o_form_view">
<table class="o_group o_inner_group o_label_nowrap">
<tr>
<td class="o_td_label">
<label class="o_form_label" for="old_pwd">Old Password</label>
</td>
<td width="100%">
<input autocomplete="current-password" autofocus="autofocus" class="o_field_widget o_input" minlength="1" name="old_pwd" type="password"/>
</td>
</tr>
<tr>
<td class="o_td_label">
<label class="o_form_label" for="new_password">New Password</label>
</td>
<td width="100%">
<input autocomplete="new-password" class="o_field_widget o_input" minlength="1" name="new_password" type="password"/>
</td>
</tr>
<tr>
<td class="o_td_label">
<label class="o_form_label" for="confirm_pwd">Confirm New Password</label>
</td>
<td width="100%">
<input autocomplete="new-password" class="o_field_widget o_input" minlength="1" name="confirm_pwd" type="password"/>
</td>
</tr>
</table>
<button class="btn btn-sm btn-primary oe_form_button" type="button">Change Password</button>
<button class="btn btn-sm btn-default oe_form_button oe_form_button_cancel" href="javascript:void(0)" type="button">Cancel</button>
</div>
</form>
<t t-name="ControlPanel">
<div class="o_control_panel">
<ol class="breadcrumb"/>
<div class="o_cp_searchview"/>
<div class="o_cp_left">
<div class="o_cp_buttons"/>
<div class="o_cp_sidebar"/>
</div>
<div class="o_cp_right">
<div class="btn-group o_search_options"/>
<div class="o_cp_pager"/>
<div class="btn-group btn-group-sm o_cp_switch_buttons"/>
</div>
</div>
</t>
<t t-name="X2ManyControlPanel">
<div class="o_x2m_control_panel">
<div class="o_cp_buttons"/>
<div class="o_cp_pager"/>
</div>
</t>
<t t-name="ControlPanel.SwitchButtons">
<t t-as="view" t-foreach="views">
<button t-att-accesskey="view.accessKey" t-att-aria-label="view.type" t-att-data-view-type="view.type" t-att-title="view.label" t-attf-class="btn btn-icon fa fa-lg #{view.icon} o_cp_switch_#{view.type}" tabindex="-1" type="button"/>
</t>
</t>
<t t-name="WebClient.DebugManager">
<li class="o_debug_manager">
<a aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="#" tabindex="-1" title="Open Developer Tools">
<span class="fa fa-bug"/>
</a>
<ul class="dropdown-menu o_debug_dropdown" role="menu"/>
</li>
</t>
<t t-name="WebClient.DebugManager.Global">
<li>
<a data-action="perform_js_tests" href="#">Run JS Tests</a>
</li>
<li>
<a data-action="perform_js_mobile_tests" href="#">Run JS Mobile Tests</a>
</li>
<li>
<a data-action="select_view" href="#">Open View</a>
</li>
<t t-if="manager._events">
<li class="divider"/>
<li>
<a data-action="show_timelines" href="#">Toggle Timelines</a>
</li>
<li>
<a data-action="requests_clear" href="#">Clear Events</a>
</li>
</t>
<li class="divider o_debug_leave_section"/>
<li>
<a data-action="split_assets" href="#">Activate Assets Debugging</a>
</li>
<li>
<a data-action="regenerateAssets" href="#">Regenerate Assets Bundles</a>
</li>
<li>
<a data-action="leave_debug_mode" href="#">Leave the Developer Tools</a>
</li>
</t>
<t t-name="WebClient.DebugManager.Action">
<t t-if="action">
<li class="divider"/>
<li>
<a data-action="edit" href="#" t-att-data-id="action.id" t-att-data-model="action.type">Edit Action</a>
</li>
<t t-if="action.res_model">
<li>
<a data-action="get_view_fields" href="#">View Fields</a>
</li>
<li>
<a data-action="manage_filters" href="#">Manage Filters</a>
</li>
<li>
<a data-action="translate" href="#">Technical Translation</a>
</li>
</t>
</t>
</t>
<t t-name="WebClient.DebugManager.Action.Fields">
<dl>
<t t-as="field" t-foreach="fields">
<dt>
<h4>
<t t-esc="field"/>
</h4>
</dt>
<dd>
<dl>
<ul>
<li t-as="attribute" t-foreach="field_value">
<strong>
<t t-esc="attribute"/>
</strong>
:
<t t-esc="attribute_value"/>
</li>
</ul>
</dl>
</dd>
</t>
</dl>
</t>
<t t-name="WebClient.DebugManager.View">
<t t-if="view">
<li class="divider"/>
<t t-if="view.type === 'form'">
<li>
<a data-action="set_defaults" href="#">Set Defaults</a>
</li>
<t t-if="controller.getSelectedIds().length === 1">
<li>
<a data-action="get_metadata" href="#">View Metadata</a>
</li>
</t>
</t>
<li>
<a data-action="fvg" href="#">Fields View Get</a>
</li>
<t t-if="can_edit">
<li>
<a data-action="edit" data-model="ir.ui.view" href="#" t-att-data-id="view.fieldsView.view_id">
Edit View:
<t t-esc="_.str.capitalize(view.type)"/>
</a>
</li>
<li t-if="searchview and searchview.$el.is(':visible')">
<a data-action="edit" data-model="ir.ui.view" href="#" t-att-data-id="action.searchFieldsView.view_id">Edit SearchView</a>
</li>
</t>
</t>
</t>
<t t-name="WebClient.DebugViewLog">
<table class="table table-condensed table-striped">
<tr>
<th>ID:</th>
<td>
<t t-esc="perm.id"/>
</td>
</tr>
<tr>
<th>XML ID:</th>
<td>
<t t-esc="perm.xmlid or '/'"/>
</td>
</tr>
<tr>
<th>No Update:</th>
<td>
<t t-esc="perm.noupdate"/>
</td>
</tr>
<tr>
<th>Creation User:</th>
<td>
<t t-esc="perm.creator"/>
</td>
</tr>
<tr>
<th>Creation Date:</th>
<td>
<t t-esc="perm.create_date"/>
</td>
</tr>
<tr>
<th>Latest Modification by:</th>
<td>
<t t-esc="perm.lastModifiedBy"/>
</td>
</tr>
<tr>
<th>Latest Modification Date:</th>
<td>
<t t-esc="perm.write_date"/>
</td>
</tr>
</table>
</t>
<div class="o_debug_manager_overlay" t-name="WebClient.DebugManager.RequestsOverlay">
<header>
<t t-set="canvas_height" t-value="widget.TRACKS * (widget.TRACK_WIDTH + 1)"/>
<canvas id="o_debug_requests_summary" t-att-height="canvas_height"/>
<canvas id="o_debug_requests_selector" t-att-height="canvas_height"/>
</header>
<div class="o_debug_requests"/>
<div class="o_debug_tooltip"/>
</div>
<t t-name="Sidebar">
<t t-as="section" t-foreach="widget.sections">
<div class="btn-group o_dropdown">
<button aria-expanded="false" class="o_dropdown_toggler_btn btn btn-sm dropdown-toggle" data-toggle="dropdown" t-if="section.name != 'buttons'">
<t t-if="section.name == 'files'" t-raw="widget.items[section.name].length || ''"/>
<t t-esc="section.label"/>
<span class="caret"/>
</button>
<t t-as="item" t-att-class="item.classname" t-foreach="widget.items[section.name]" t-if="section.name == 'buttons'">
<a t-att-data-index="item_index" t-att-data-section="section.name" t-att-href="item.url or '#'" t-att-title="item.title or None" target="_blank">
<t t-raw="item.label"/>
</a>
</t>
<ul class="dropdown-menu" role="menu">
<li t-as="item" t-att-class="item.classname" t-foreach="widget.items[section.name]">
<t t-if="section.name == 'files'">
<t t-set="item.title">
<b>Attachment : </b>
<br/>
<t t-raw="item.name"/>
</t>
<t t-if="item.create_uid and item.create_uid[0]" t-set="item.title">
<t t-raw="item.title"/>
<br/>
<b>Created by : </b>
<br/>
<t t-raw="item.create_uid[1]"/>
<t t-esc="item.create_date_string"/>
</t>
<t t-if="item.create_uid and item.write_uid and item.create_uid[0] != item.write_uid[0]" t-set="item.title">
<t t-raw="item.title"/>
<br/>
<b>Modified by : </b>
<br/>
<t t-raw="item.write_uid[1]"/>
<t t-esc="item.write_date_string"/>
</t>
</t>
<a t-att-data-index="item_index" t-att-data-section="section.name" t-att-href="item.url or '#'" t-att-title="item.title or None">
<t t-raw="item.label"/>
<span class="fa fa-trash-o o_sidebar_delete_attachment" t-att-data-id="item.id" t-if="section.name == 'files' and widget.options.editable and !item.callback" title="Delete this attachment"/>
</a>
</li>
<li class="o_sidebar_add_attachment" t-if="section.name == 'files' and widget.options.editable">
<t t-call="HiddenInputFile">
<t t-set="fileupload_id" t-value="widget.fileuploadId"/>
<t t-set="fileupload_action" t-translation="off">/web/binary/upload_attachment</t>
<t t-set="multi_upload" t-value="true"/>
<input name="model" t-att-value="widget.env and widget.env.model" type="hidden"/>
<input name="id" t-att-value="widget.env.activeIds[0]" type="hidden"/>
<input name="session_id" t-att-value="widget.getSession().session_id" t-if="widget.getSession().override_session" type="hidden"/>
<span>Add...</span>
</t>
</li>
</ul>
</div>
</t>
</t>
<t t-name="ListView.buttons">
<div class="o_list_buttons">
<t t-if="widget.is_action_enabled('create')">
<button accesskey="c" class="btn btn-primary btn-sm o_list_button_add" type="button"> Create </button>
</t>
<button accesskey="s" class="btn btn-primary btn-sm o_list_button_save" type="button"> Save </button>
<button accesskey="j" class="btn btn-default btn-sm o_list_button_discard" type="button"> Discard </button>
</div>
</t>
<t t-name="FormView.buttons">
<div class="o_form_buttons_view">
<button accesskey="a" class="btn btn-primary btn-sm o_form_button_edit" t-if="widget.is_action_enabled('edit')" type="button"> Edit </button>
<button accesskey="c" class="btn btn-default btn-sm o_form_button_create" t-if="widget.is_action_enabled('create')" type="button"> Create </button>
</div>
<div class="o_form_buttons_edit">
<button accesskey="s" class="btn btn-primary btn-sm o_form_button_save" type="button"> Save </button>
<button accesskey="j" class="btn btn-default btn-sm o_form_button_cancel" type="button"> Discard </button>
</div>
</t>
<t t-name="SaveCancelButton.tooltip">
<div class="oe_tooltip_string">
<div class="tooltip-inner">
Hit ENTER to SAVE
<br/>
Hit ESCAPE to DISCARD
</div>
</div>
</t>
<t t-name="CreateButton.tooltip">
<div class="oe_tooltip_string">
<div class="tooltip-inner">
Hit ENTER to CREATE
<br/>
Hit DOWN to navigate to the list bellow
</div>
</div>
</t>
<t t-name="FormButton.tooltip">
<div class="oe_tooltip_string">
<div class="tooltip-inner">
Hit ENTER to
<t t-esc="title"/>
</div>
</div>
</t>
<form t-name="FormView.set_default">
<t t-set="args" t-value="widget.args"/>
<table style="width: 100%">
<tr>
<td>
<label class="oe_label oe_align_right" for="formview_default_fields"> Default: </label>
</td>
<td class="oe_form_required">
<select class="o_input" id="formview_default_fields">
<option value=""/>
<option t-as="field" t-att-value="field.name" t-foreach="args.fields">
<t t-esc="field.string"/>
=
<t t-esc="field.displayed"/>
</option>
</select>
</td>
</tr>
<tr t-if="args.conditions.length">
<td>
<label class="oe_label oe_align_right" for="formview_default_conditions"> Condition: </label>
</td>
<td>
<select class="o_input" id="formview_default_conditions">
<option value=""/>
<option t-as="cond" t-att-value="cond.name + '=' + cond.value" t-foreach="args.conditions">
<t t-esc="cond.string"/>
=
<t t-esc="cond.displayed"/>
</option>
</select>
</td>
</tr>
<tr>
<td colspan="2">
<input checked="checked" id="formview_default_self" name="scope" type="radio" value="self"/>
<label class="oe_label" for="formview_default_self" style="display: inline;"> Only you </label>
<br/>
<input id="formview_default_all" name="scope" type="radio" value="all"/>
<label class="oe_label" for="formview_default_all" style="display: inline;"> All users </label>
</td>
</tr>
</table>
</form>
<t t-name="GraphView.buttons">
<div class="btn-group btn-group-sm" role="group">
<button aria-expanded="false" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
Measures
<span class="caret"/>
</button>
<ul class="dropdown-menu o_graph_measures_list">
<li t-as="measure" t-att-data-field="measure[0]" t-foreach="measures">
<a href="#">
<t t-esc="measure[1].string"/>
<t t-if="measure[1].type === 'many2one'"> (count)</t>
</a>
</li>
<li class="divider"/>
<li data-field="__count__">
<a href="#">Count</a>
</li>
</ul>
</div>
<div class="btn-group btn-group-sm">
<button class="btn btn-default fa fa-bar-chart-o o_graph_button" data-mode="bar" title="Bar Chart"/>
<button class="btn btn-default fa fa-line-chart o_graph_button" data-mode="line" title="Line Chart"/>
<button class="btn btn-default fa fa-pie-chart o_graph_button" data-mode="pie" title="Pie Chart"/>
</div>
</t>
<div class="o_view_nocontent" t-name="GraphView.error">
<div class="o_nocontent_help">
<p class="o_view_nocontent_empty_folder">
<t t-esc="title"/>
</p>
<p>
<t t-esc="description"/>
</p>
</div>
</div>
<div class="o_pivot" t-name="PivotView">
<div class="o_field_selection"/>
</div>
<t t-name="PivotView.buttons">
<div class="btn-group btn-group-sm" role="group">
<button aria-expanded="false" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
Measures
<span class="caret"/>
</button>
<ul class="dropdown-menu o_pivot_measures_list">
<li t-as="measure" t-att-data-field="measure[0]" t-foreach="measures">
<a href="#">
<t t-esc="measure[1].string"/>
<t t-if="measure[1].type === 'many2one'"> (count)</t>
</a>
</li>
<li class="divider"/>
<li data-field="__count">
<a href="#">Count</a>
</li>
</ul>
</div>
<div class="btn-group btn-group-sm">
<button class="btn btn-default fa fa-expand o_pivot_flip_button" title="Flip axis"/>
<button class="btn btn-default fa fa-arrows-alt o_pivot_expand_button" title="Expand all"/>
<button class="btn btn-default fa fa-download o_pivot_download" title="Download xls"/>
</div>
</t>
<t t-name="PivotView.FieldSelection">
<ul class="dropdown-menu o_pivot_field_menu" role="menu">
<t t-as="field" t-foreach="fields">
<t t-if="(field[1].type === 'date') || (field[1].type === 'datetime')">
<li t-att-data-field="field[0]" t-attf-class="o_inline_dropdown#{field[2] ? ' disabled' : ''}">
<a class="o_pivot_field_selection" href="#">
<t t-esc="field[1].string"/>
</a>
<ul class="dropdown-menu">
<li t-att-data-field="field[0]">
<a href="#" t-att-data-interval="'day'">Day</a>
</li>
<li t-att-data-field="field[0]">
<a href="#" t-att-data-interval="'week'">Week</a>
</li>
<li t-att-data-field="field[0]">
<a href="#" t-att-data-interval="'month'">Month</a>
</li>
<li t-att-data-field="field[0]">
<a href="#" t-att-data-interval="'quarter'">Quarter</a>
</li>
<li t-att-data-field="field[0]">
<a href="#" t-att-data-interval="'year'">Year</a>
</li>
</ul>
</li>
</t>
<t t-else="">
<li t-att-class="(field[2] ? 'disabled' : '')" t-att-data-field="field[0]">
<a href="#">
<t t-esc="field[1].string"/>
</a>
</li>
</t>
</t>
</ul>
</t>
<div t-name="PivotView.nodata">
<div class="o_view_nocontent">
<div class="o_nocontent_help">
<p class="o_view_nocontent_empty_folder"> No data to display </p>
<p>
Try to add some records, or make sure that there is at least one measure and no active filter in the search bar.
</p>
</div>
</div>
</div>
<t t-name="FormSelection">
<div class="btn-group o_selection">
<a data-toggle="dropdown" href="#">
<span class="o_status"/>
</a>
<ul class="dropdown-menu state" role="menu"> </ul>
</div>
</t>
<t t-name="FormSelection.items">
<li t-as="rec" t-att-data-value="rec.name" t-foreach="states">
<a href="#">
<span t-att-class="'o_status ' + (rec.state_class && rec.state_class || '')"/>
<t t-raw="rec.state_name"/>
</a>
</li>
</t>
<t t-name="FieldDomain.content">
<div class="o_field_domain_panel" t-if="hasModel">
<i class="fa fa-arrow-right"/>
<button class="btn btn-xs btn-default o_domain_show_selection_button" t-if="isValid" type="button">
<t t-esc="nbRecords"/>
record(s)
</button>
<span class="text-warning" t-else="">
<i class="fa fa-exclamation-triangle"/>
Invalid domain
</span>
<button class="btn btn-xs btn-primary o_field_domain_dialog_button" t-if="inDialogEdit">Edit Domain</button>
</div>
<div t-else="">Select a model to add a filter.</div>
</t>
<t t-name="DomainNode.ControlPanel">
<div class="o_domain_node_control_panel" t-if="!widget.readonly && !widget.noControlPanel">
<button class="btn o_domain_delete_node_button">
<i class="fa fa-times"/>
</button>
<button class="btn o_domain_add_node_button">
<i class="fa fa-plus-circle"/>
</button>
<button class="btn o_domain_add_node_button" data-branch="1">
<i class="fa fa-ellipsis-h"/>
</button>
</div>
</t>
<t t-name="DomainTree.OperatorSelector">
<div class="btn-group o_domain_tree_operator_selector" t-if="!widget.readonly">
<button class="btn btn-xs btn-primary o_domain_tree_operator_caret" data-toggle="dropdown">
<t t-if="widget.operator === '&'">All</t>
<t t-if="widget.operator === '|'">Any</t>
<t t-if="widget.operator === '!'">None</t>
</button>
<ul class="dropdown-menu">
<li>
<a data-operator="&" href="#">All</a>
</li>
<li>
<a data-operator="|" href="#">Any</a>
</li>
</ul>
</div>
<strong t-else="">
<t t-if="widget.operator === '&'">ALL</t>
<t t-if="widget.operator === '|'">ANY</t>
<t t-if="widget.operator === '!'">NONE</t>
</strong>
</t>
<div t-attf-class="o_domain_node o_domain_tree o_domain_selector #{widget.readonly ? 'o_read_mode' : 'o_edit_mode'}" t-name="DomainSelector">
<t t-if="widget.children.length === 0">
<span>
Match
<strong>all records</strong>
</span>
<button class="btn btn-xs btn-primary o_domain_add_first_node_button" t-if="!widget.readonly">
<i class="fa fa-plus"/>
Add filter
</button>
</t>
<t t-else="">
<div class="o_domain_tree_header">
<t t-if="widget.children.length === 1">Match records with the following rule:</t>
<t t-else="">
<span>Match records with</span>
<t t-call="DomainTree.OperatorSelector"/>
<span>of the following rules:</span>
</t>
</div>
<div class="o_domain_node_children_container"/>
</t>
<label class="o_domain_debug_container" t-if="widget.debug && !widget.readonly">
<span class="small"># Code editor</span>
<input class="o_domain_debug_input" type="text"/>
</label>
</div>
<div class="o_domain_node o_domain_tree" t-name="DomainTree">
<div class="o_domain_tree_header o_domain_selector_row">
<t t-call="DomainNode.ControlPanel"/>
<t t-call="DomainTree.OperatorSelector"/>
<span class="ml4">of:</span>
</div>
<div class="o_domain_node_children_container"/>
</div>
<div t-attf-class="o_domain_node o_domain_leaf o_domain_selector_row #{widget.readonly ? 'o_read_mode' : 'o_edit_mode'}" t-name="DomainLeaf">
<t t-call="DomainNode.ControlPanel"/>
<div class="o_domain_leaf_edition" t-if="!widget.readonly">
<div>
<select class="o_domain_leaf_operator_select o_input">
<option t-as="key" t-att-selected="widget.displayOperator === key ? 'selected' : None" t-att-value="key" t-foreach="widget.operators">
<t t-esc="key_value"/>
</option>
</select>
</div>
<div t-attf-class="o_ds_value_cell#{_.contains(['set', 'not set'], widget.displayOperator) ? ' hidden' : ''}">
<t t-if="widget.selectionChoices !== null">
<select class="o_domain_leaf_value_input o_input">
<option t-as="val" t-att-selected="_.contains(val, widget.displayValue) ? 'selected' : None" t-att-value="val[0]" t-foreach="widget.selectionChoices">
<t t-esc="val[1]"/>
</option>
</select>
</t>
<t t-else="">
<t t-if="_.contains(['in', 'not in'], widget.operator)">
<div class="o_domain_leaf_value_input">
<span class="badge" t-as="val" t-foreach="widget.displayValue">
<t t-esc="val"/>
<i class="o_domain_leaf_value_remove_tag_button fa fa-times" t-att-data-value="val"/>
</span>
</div>
<div class="o_domain_leaf_value_tags">
<input class="o_input" placeholder="Add new value" type="text"/>
<button class="btn btn-xs btn-primary fa fa-plus o_domain_leaf_value_add_tag_button"/>
</div>
</t>
<t t-else="">
<input class="o_domain_leaf_value_input o_input" t-att-value="widget.displayValue" type="text"/>
</t>
</t>
</div>
</div>
<div class="o_domain_leaf_info" t-else="">
<t t-if="_.isString(widget.value)">
<span class="o_domain_leaf_operator">
<t t-esc="widget.operator_mapping[widget.operator]"/>
</span>
<span class="o_domain_leaf_value text-primary">
"
<t t-esc="widget.value"/>
"
</span>
</t>
<t t-if="_.isArray(widget.value)">
<span class="o_domain_leaf_operator">
<t t-esc="widget.operator_mapping[widget.operator]"/>
</span>
<t t-as="v" t-foreach="widget.value">
<span class="o_domain_leaf_value text-primary">
"
<t t-esc="v"/>
"
</span>
<t t-if="!v_last"> or </t>
</t>
</t>
<t t-if="_.isNumber(widget.value)">
<span class="o_domain_leaf_operator">
<t t-esc="widget.operator_mapping[widget.operator]"/>
</span>
<span class="o_domain_leaf_value text-primary">
<t t-esc="widget.value"/>
</span>
</t>
<t t-if="_.isBoolean(widget.value)">
is
<t t-if="widget.operator === '=' && widget.value === false || widget.operator === '!=' && widget.value === true">not</t>
set
</t>
</div>
</div>
<div t-attf-class="o_field_selector#{!widget.options.readonly ? ' o_edit_mode o_input' : ''}" t-name="ModelFieldSelector">
<div class="o_field_selector_value" tabindex="0"/>
<div class="o_field_selector_controls" tabindex="0">
<i class="fa fa-exclamation-triangle o_field_selector_warning hidden" title="Invalid field chain"/>
</div>
<div class="o_field_selector_popover hidden" t-if="!widget.options.readonly" tabindex="0">
<div class="o_field_selector_popover_header text-center">
<i class="fa fa-arrow-left o_field_selector_popover_option o_field_selector_prev_page"/>
<div class="o_field_selector_title"/>
<i class="fa fa-times o_field_selector_popover_option o_field_selector_close"/>
</div>
<div class="o_field_selector_popover_body">
<ul class="o_field_selector_page"/>
</div>
<div class="o_field_selector_popover_footer" t-if="widget.options.debugMode">
<input class="o_input" type="text"/>
</div>
</div>
</div>
<t t-name="ModelFieldSelector.value">
<t t-as="fieldName" t-foreach="chain">
<t t-if="fieldName_index > 0">
<i class="fa fa-chevron-right"/>
</t>
<span class="o_field_selector_chain_part">
<t t-set="fieldInfo" t-value="_.findWhere(pages[fieldName_index], {'name': fieldName})"/>
<t t-esc="fieldInfo && fieldInfo.string || '?'"/>
</span>
</t>
</t>
<ul class="o_field_selector_page" t-name="ModelFieldSelector.page">
<t t-as="line" t-foreach="lines">
<t t-set="relationToFollow" t-value="followRelations && line.relation"/>
<li t-att-data-name="line.name" t-attf-class="o_field_selector_item #{relationToFollow and 'o_field_selector_next_page' or 'o_field_selector_select_button'}#{line_index == 0 and ' active' or ''}">
<t t-esc="line.string"/>
<div class="text-muted o_field_selector_item_title" t-if="debug">
<t t-esc="line.name"/>
(
<t t-esc="line.type"/>
)
</div>
<i class="fa fa-chevron-right o_field_selector_relation_icon" t-if="relationToFollow"/>
</li>
</t>
</ul>
<t t-name="web.datepicker">
<t t-set="placeholder" t-value="widget.getParent().node and widget.getParent().node.attrs.placeholder"/>
<div class="o_datepicker">
<input class="o_datepicker_input o_input" t-att-name="widget.name" t-att-placeholder="placeholder" type="text"/>
<span class="o_datepicker_button"/>
</div>
</t>
<t t-name="FieldSelection">
<span t-if="widget.mode === 'readonly'"/>
<select class="o_input" t-att-autofocus="widget.attrs.autofocus" t-att-id="widget.idForLabel" t-att-name="widget.name" t-att-tabindex="widget.attrs.tabindex" t-if="widget.mode !== 'readonly'"/>
</t>
<t t-name="FieldRadio.button">
<div class="o_radio_item">
<input class="o_radio_input" t-att-checked="checked ? true : undefined" t-att-data-index="index" t-att-data-value="value[0]" t-att-id="id" type="radio"/>
<label class="o_form_label" t-att-for="id">
<t t-esc="value[1]"/>
</label>
</div>
</t>
<t t-name="FieldMany2One">
<t t-if="widget.mode === 'readonly'">
<a class="o_form_uri" href="#" t-if="!widget.nodeOptions.no_open"/>
<span t-if="widget.nodeOptions.no_open"/>
</t>
<div class="o_field_widget o_field_many2one" t-if="widget.mode === 'edit'">
<div class="o_input_dropdown">
<input class="o_input" t-att-autofocus="widget.attrs.autofocus" t-att-barcode_events="widget.nodeOptions.barcode_events" t-att-id="widget.idForLabel" t-att-placeholder="widget.attrs.placeholder" t-att-tabindex="widget.attrs.tabindex" type="text"/>
<span class="o_dropdown_button" draggable="false"/>
</div>
<button class="fa fa-external-link btn btn-default o_external_button" draggable="false" t-if="!widget.nodeOptions.no_open" tabindex="-1" type="button"/>
</div>
</t>
<t t-extend="FieldMany2One" t-name="FieldReference">
<t t-jquery=".o_input_dropdown" t-operation="before">
<select t-att-class="'o_input o_field_widget' + (widget.nodeOptions.hide_model and ' hidden' or '')">
<option/>
<option t-as="model" t-att-value="model[0]" t-foreach="widget.field.selection">
<t t-esc="model[1]"/>
</option>
</select>
</t>
</t>
<t t-name="FieldMany2ManyTag">
<t t-as="el" t-foreach="elements">
<t t-set="color" t-value="el[colorField] || 0"/>
<span t-att-data-color="color" t-att-data-id="el.id" t-att-data-index="el_index" t-attf-class="badge dropdown o_tag_color_#{color}">
<span class="o_badge_text" t-att-title="el.display_name">
<t t-esc="el.display_name"/>
</span>
<span class="fa fa-times o_delete" t-if="!readonly"/>
</span>
</t>
</t>
<t t-name="FieldMany2ManyTag.colorpicker">
<div class="o_colorpicker dropdown-menu tagcolor_dropdown_menu" role="menu">
<ul>
<li t-as="color" t-foreach="11">
<a href="#" t-att-data-color="color+1" t-att-data-id="tag_id" t-attf-class="o_tag_color_#{color+1}"/>
</li>
<li>
<div class="o_hide_in_kanban" t-att-data-color="0" t-att-data-id="tag_id">
<div class="o_checkbox">
<input type="checkbox"/>
<span/>
</div>
Hide in Kanban
</div>
</li>
</ul>
</div>
</t>
<t t-name="ProgressBar">
<div class="o_progressbar">
<div class="o_progressbar_title" t-if="widget.title">
<t t-esc="widget.title"/>
</div>
<div class="o_progress">
<div class="o_progressbar_complete"/>
</div>
<div class="o_progressbar_value"/>
</div>
</t>
<t t-name="FieldPercentPie">
<div class="o_field_percent_pie">
<div class="o_pie">
<div class="o_mask"/>
<div class="o_mask"/>
<div class="o_pie_value"/>
</div>
<span t-if="widget.string">
<t t-esc="widget.string"/>
</span>
</div>
</t>
<t t-name="FieldStatus.content">
<t t-if="selection_folded.length">
<ul class="dropdown-menu o-status-more" role="menu">
<li t-as="i" t-foreach="selection_folded">
<t t-call="FieldStatus.content.button"/>
</li>
</ul>
<button aria-expanded="false" class="btn btn-sm o_arrow_button btn-default dropdown-toggle" data-toggle="dropdown" type="button">
More
<span class="caret"/>
</button>
</t>
<t t-as="i" t-foreach="selection_unfolded.reverse()">
<t t-call="FieldStatus.content.button"/>
</t>
</t>
<t t-name="FieldStatus.content.button">
<t t-set="disabled" t-value="!clickable || i.selected"/>
<button t-att-data-value="i.id" t-att-disabled="disabled ? 'disabled' : undefined" t-attf-class="btn btn-sm o_arrow_button btn-#{i.selected ? 'primary' : 'default'}#{disabled ? ' disabled' : ''}" type="button">
<t t-esc="i.display_name"/>
</button>
</t>
<t t-name="FieldBinaryImage">
<div class="o_field_image">
<t t-if="widget.mode !== 'readonly'">
<div class="o_form_image_controls">
<span class="fa fa-pencil fa-lg pull-left o_select_file_button" title="Edit"/>
<span class="fa fa-trash-o fa-lg pull-right o_clear_file_button" title="Clear"/>
<span class="o_form_binary_progress">Uploading...</span>
<t t-call="HiddenInputFile">
<t t-set="image_only" t-value="true"/>
<t t-set="fileupload_id" t-value="widget.fileupload_id"/>
</t>
</div>
</t>
</div>
</t>
<t t-name="FieldBinaryImage-img">
<img class="img img-responsive" t-att-border="widget.readonly ? 0 : 1" t-att-name="widget.name" t-att-src="url"/>
</t>
<t t-name="FieldBinaryFile">
<a class="o_form_uri" href="javascript:void(0)" t-if="widget.mode === 'readonly'"/>
<div class="o_field_binary_file" t-if="widget.mode !== 'readonly'">
<input class="o_input" readonly="readonly" t-att-autofocus="widget.attrs.autofocus" t-att-name="widget.name" t-att-tabindex="widget.attrs.tabindex" type="text"/>
<button class="btn btn-sm btn-primary o_select_file_button" title="Select" type="button">Upload your file</button>
<button class="btn btn-sm btn-default fa fa-pencil o_select_file_button" title="Select" type="button"/>
<button class="btn btn-sm btn-default fa fa-trash-o o_clear_file_button" title="Clear" type="button"/>
<span class="o_form_binary_progress">Uploading...</span>
<t t-call="HiddenInputFile">
<t t-set="fileupload_id" t-value="widget.fileupload_id"/>
<t t-set="fileupload_style" t-translation="off">overflow-x: hidden</t>
</t>
</div>
</t>
<t t-name="HiddenInputFile">
<div t-att-style="fileupload_style" t-attf-class="o_hidden_input_file #{fileupload_class or ''}">
<form class="o_form_binary_form" enctype="multipart/form-data" method="post" t-att-action="fileupload_action || '/web/binary/upload'" t-att-target="fileupload_id">
<input name="csrf_token" t-att-value="csrf_token" type="hidden"/>
<input name="session_id" t-if="widget.getSession().override_session" type="hidden" value=""/>
<input name="callback" t-att-value="fileupload_id" type="hidden"/>
<input accept="image/*" class="o_input_file" name="ufile" t-if="widget.image_only" type="file"/>
<input class="o_input_file" name="ufile" t-att="{'multiple': multi_upload ? 'multiple' : null}" t-if="!widget.image_only" type="file"/>
<t t-raw="0"/>
</form>
<iframe style="display: none" t-att-id="fileupload_id" t-att-name="fileupload_id"/>
</div>
</t>
<t t-name="FieldPdfViewer">
<div class="o_field_pdfviewer">
<div class="o_form_pdf_controls mt8" t-if="widget.mode !== 'readonly'">
<span class="o_form_binary_progress">Uploading...</span>
<button class="btn btn-sm btn-primary o_select_file_button" title="Select" type="button">Upload your file</button>
<button class="btn btn-sm btn-default fa fa-pencil o_select_file_button" title="Select" type="button"/>
<button class="btn btn-sm btn-default fa fa-trash-o o_clear_file_button" title="Clear" type="button"/>
</div>
<iframe class="o_pdfview_iframe o_field_pdfviewer"/>
<t t-call="HiddenInputPDFFile">
<t t-set="fileupload_id" t-value="widget.fileupload_id"/>
<t t-set="fileupload_style" t-translation="off">overflow-x: hidden</t>
</t>
</div>
</t>
<t t-extend="HiddenInputFile" t-name="HiddenInputPDFFile">
<t t-jquery="input[type='file']" t-operation="replace"/>
<t t-jquery="form" t-operation="append">
<input accept="application/pdf" class="o_input_file" name="ufile" type="file"/>
</t>
</t>
<div t-attf-class="oe_fileupload #{widget.attrs.class ? widget.attrs.class :''}" t-name="FieldBinaryFileUploader">
<div class="oe_placeholder_files"/>
<div class="oe_add" t-if="widget.mode !== 'readonly'">
<button class="btn btn-default o_attach">
<span class="fa fa-paperclip"/>
<t t-esc="widget.string"/>
</button>
<t t-call="HiddenInputFile">
<t t-set="fileupload_id" t-value="widget.fileupload_id"/>
<t t-set="fileupload_action" t-translation="off">/web/binary/upload_attachment</t>
<t t-set="multi_upload" t-value="true"/>
<input name="model" t-att-value="widget.model" type="hidden"/>
<input name="id" type="hidden" value="0"/>
<input name="session_id" t-att-value="widget.getSession().session_id" t-if="widget.getSession().override_session" type="hidden"/>
</t>
</div>
</div>
<div class="oe_attachments" t-name="FieldBinaryFileUploader.files">
<t t-if="widget.mode === 'readonly'">
<div t-as="file" t-foreach="widget.value.data">
<a t-att-href="widget.metadata[file.id].url" t-attf-title="#{(file.data.name || file.data.filename) + (file.data.date?' \n('+file.data.date+')':'' )}" target="_blank">
<t t-raw="file.data.name || file.data.filename"/>
</a>
</div>
</t>
<t t-else="1">
<div class="oe_attachment" t-as="file" t-foreach="widget.value.data">
<t t-if="!file.data.upload">
<div>
<a class="fa fa-times pull-right oe_delete" href="#" t-att-data-id="file.data.id" title="Delete this file"/>
<t t-raw="file.data.name || file.data.filename"/>
</div>
<a class="o_image" t-att-data-mimetype="file.data.mimetype" t-att-href="widget.metadata[file.id] ? widget.metadata[file.id].url : false" t-att-title="file.data.name" t-attf-data-src="/web/image/#{file.data.id}/100x80" target="_blank"/>
</t>
</div>
<div class="oe_attachment" t-as="file" t-foreach="widget.uploadingFiles">
<div>Uploading...</div>
<a class="o_image" t-att-name="file.name" t-att-title="file.name">
<i class="fa fa-spinner fa-spin fa-5x fa-fw"/>
</a>
<div>
<t t-esc="file.name"/>
</div>
</div>
</t>
</div>
<div class="o_searchview" t-name="SearchView">
<span class="o_searchview_more fa" title="Advanced Search..."/>
</div>
<input accesskey="Q" class="o_searchview_input" placeholder="Search..." t-name="SearchView.InputView" type="text"/>
<div class="o_searchview_facet" t-name="SearchView.FacetView" tabindex="0">
<span t-att-class="'fa ' + widget.model.get('icon') + ' o_searchview_facet_label'" t-if="widget.model.has('icon')"/>
<span class="o_searchview_facet_label" t-if="!widget.model.has('icon')">
<t t-esc="widget.model.get('category')"/>
</span>
<div class="o_facet_values"/>
<div class="fa fa-sm fa-remove o_facet_remove"/>
</div>
<span t-name="SearchView.FacetView.Value">
<t t-esc="widget.model.get('label')"/>
</span>
<t t-name="SearchView.autocomplete">
<ul class="dropdown-menu o_searchview_autocomplete" role="menu"/>
</t>
<div class="btn-group o_dropdown" t-name="SearchView.FilterMenu">
<button aria-expanded="false" class="o_dropdown_toggler_btn btn btn-sm dropdown-toggle" data-toggle="dropdown" tabindex="-1">
<span class="fa fa-filter"/>
Filters
<span class="caret"/>
</button>
<ul class="dropdown-menu o_filters_menu" role="menu">
<li class="o_add_filter o_closed_menu">
<a href="#">Add Custom Filter</a>
</li>
<li class="o_add_filter_menu">
<button class="btn btn-primary btn-sm o_apply_filter" type="button">Apply</button>
<button class="btn btn-default btn-sm o_add_condition" type="button">
<span class="fa fa-plus-circle"/>
Add a condition
</button>
</li>
</ul>
</div>
<t t-name="SearchView.filters">
<li t-as="filter" t-att-data-index="filter_index" t-att-title="filter.attrs.string ? filter.attrs.help : undefined" t-foreach="widget.filters" t-if="!filter.visible || filter.visible()">
<a href="#">
<t t-esc="filter.attrs.string or filter.attrs.help or filter.attrs.name or 'O'"/>
</a>
</li>
</t>
<t t-name="SearchView.field">
<label t-att-class="'oe_label' + (attrs.help ? '_help' : '')" t-att-for="element_id" t-att-style="style" t-att-title="attrs.help">
<t t-esc="attrs.string || attrs.name"/>
<span t-if="attrs.help">?</span>
</label>
<div t-att-style="style">
<input class="o_input" size="15" t-att-autofocus="attrs.default_focus === '1' ? 'autofocus' : undefined" t-att-id="element_id" t-att-name="attrs.name" t-att-value="defaults[attrs.name] || ''" type="text"/>
<t t-if="filters.length" t-raw="filters.render(defaults)"/>
</div>
</t>
<t t-name="SearchView.date">
<label t-att-class="'oe_label' + (attrs.help ? '_help' : '')" t-att-for="element_id" t-att-style="style" t-att-title="attrs.help">
<t t-esc="attrs.string || attrs.name"/>
<span t-if="attrs.help">?</span>
</label>
<div t-att-style="style">
<span t-att-id="element_id"/>
<t t-if="filters.length" t-raw="filters.render(defaults)"/>
</div>
</t>
<t t-name="SearchView.field.selection">
<label t-att-class="'oe_label' + (attrs.help ? '_help' : '')" t-att-for="element_id" t-att-style="style" t-att-title="attrs.help">
<t t-esc="attrs.string || attrs.name"/>
<span t-if="attrs.help">?</span>
</label>
<div t-att-style="style">
<select class="o_input" t-att-autofocus="attrs.default_focus === '1' || undefined" t-att-id="element_id" t-att-name="attrs.name">
<option t-if="prepend_empty"/>
<t t-as="option" t-foreach="attrs.selection">
<t t-set="selected" t-value="defaults[attrs.name] === option[0]"/>
<option t-att-value="option_index" t-attf-selected="selected" t-if="selected">
<t t-esc="option[1]"/>
</option>
<option t-att-value="option_index" t-if="!selected">
<t t-esc="option[1]"/>
</option>
</t>
</select>
<t t-if="filters.length" t-raw="filters.render(defaults)"/>
</div>
</t>
<t t-name="SearchView.extended_search.proposition">
<li class="o_filter_condition">
<span class="o_or_filter">or</span>
<span>
<select class="o_input o_searchview_extended_prop_field">
<t t-as="field" t-foreach="widget.attrs.fields">
<option t-att="{'selected': field === widget.attrs.selected ? 'selected' : null}" t-att-value="field.name">
<t t-esc="field.string"/>
</option>
</t>
</select>
<span class="o_searchview_extended_delete_prop fa fa-trash-o"/>
</span>
<select class="o_input o_searchview_extended_prop_op"/>
<span class="o_searchview_extended_prop_value"/>
</li>
</t>
<t t-name="SearchView.extended_search.proposition.float">
<input class="o_input" step="0.01" t-att-type="widget.decimal_point === '.' ? 'number' : 'text'" t-attf-pattern="[0-9]+([\\#{widget.decimal_point || '.' }][0-9]+)?" t-attf-title="Number using #{widget.decimal_point || '.' } as decimal separator." t-attf-value="0#{widget.decimal_point || '.' }0"/>
</t>
<t t-name="SearchView.extended_search.proposition.selection">
<select class="o_input">
<option t-as="element" t-att-value="element[0]" t-foreach="widget.field.selection">
<t t-esc="element[1]"/>
</option>
</select>
</t>
<div class="btn-group hidden-xs o_dropdown" t-name="SearchView.GroupByMenu">
<button aria-expanded="false" class="o_dropdown_toggler_btn btn btn-sm dropdown-toggle" data-toggle="dropdown" tabindex="-1">
<span class="fa fa-bars"/>
Group By
<span class="caret"/>
</button>
<ul class="dropdown-menu o_group_by_menu" role="menu">
<li class="divider"/>
<li class="o_add_custom_group o_closed_menu">
<a href="#">Add custom group</a>
</li>
</ul>
</div>
<t t-name="GroupByMenuSelector">
<li>
<select class="o_input o_add_group o_group_selector">
<t t-as="field" t-foreach="groupableFields">
<option t-att-data-name="field.name">
<t t-esc="field.string"/>
</option>
</t>
</select>
</li>
<li>
<button class="btn btn-primary btn-sm o_add_group o_select_group" tabindex="-1" type="button">Apply</button>
</li>
</t>
<div class="btn-group o_dropdown" t-name="SearchView.FavoriteMenu">
<button aria-expanded="false" class="o_dropdown_toggler_btn btn btn-sm dropdown-toggle" data-toggle="dropdown" tabindex="-1">
<span class="fa fa-star"/>
Favorites
<span class="caret"/>
</button>
<ul class="dropdown-menu o_favorites_menu" role="menu">
<li class="divider user_filter"/>
<li class="divider shared_filter"/>
<li class="o_save_search o_closed_menu">
<a href="#">Save current search</a>
</li>
<li class="o_save_name">
<input type="text"/>
</li>
<li class="o_save_name">
<span>
<div class="o_checkbox">
<input type="checkbox"/>
<span/>
</div>
Use by default
</span>
</li>
<li class="o_save_name">
<span>
<div class="o_checkbox">
<input type="checkbox"/>
<span/>
</div>
Share with all users
</span>
<span class="fa fa-users"/>
</li>
<li class="o_save_name">
<button class="btn btn-primary btn-sm" type="button">Save</button>
</li>
</ul>
</div>
<div class="o_export" t-name="ExportDialog">
<p>
This wizard will export all data that matches the current search criteria to a CSV file. You can export all data or only the fields that can be reimported after modification.
</p>
<div class="row">
<div class="col-md-6">
<label>Export Type :</label>
<div class="o_import_compat">
<div>
<input checked="checked" name="o_import_compat_name" type="radio" value="yes"/>
<label>Import-Compatible Export</label>
</div>
<div>
<input name="o_import_compat_name" type="radio" value=""/>
<label>Export all Data</label>
</div>
</div>
</div>
<div class="col-md-6">
<label>Export Formats :</label>
<div class="o_export_format"/>
</div>
</div>
<div class="o_export_panel">
<div class="o_left_panel">
<h4>Available fields</h4>
<div class="o_left_field_panel"/>
</div>
<div class="o_center_panel">
<button class="btn btn-sm btn-default o_add_field" type="button">Add</button>
<button class="btn btn-sm btn-default o_remove_field" type="button">Remove</button>
<button class="btn btn-sm btn-default o_remove_all_field" type="button">Remove All</button>
<button class="btn btn-sm btn-default o_move_up" type="button">Move Up</button>
<button class="btn btn-sm btn-default o_move_down" type="button">Move Down</button>
</div>
<div class="o_right_panel">
<h4>
<a class="pull-right o_toggle_save_list" href="#">Save fields list</a>
Fields to export
</h4>
<div class="o_save_list"/>
<div class="o_exported_lists"/>
<select class="o_fields_list" multiple="multiple"/>
</div>
</div>
</div>
<p t-name="Export.DomainMessage">
<strong t-if="!record.ids_to_export">
Please pay attention that all records matching your search filter will be exported. Not only the selected ids.
</strong>
<strong t-if="record.ids_to_export">
Please note that only the selected ids will be exported.
</strong>
</p>
<div class="o_export_tree_item" t-as="field" t-att-data-id="field.id" t-foreach="fields" t-name="Export.TreeItems" tabindex="-1">
<span class="o_expand_parent fa fa-plus" t-if="field.children && (field.id).split('/').length != 3"/>
<span class="o_tree_column" t-att-title="debug and field.id or None">
<t t-esc="field.string"/>
</span>
</div>
<t t-name="Export.SaveList">
<label>Save as:</label>
<input type="text"/>
<button class="btn btn-sm btn-default" type="button">Ok</button>
</t>
<t t-name="Export.SavedList">
<label>Saved exports: </label>
<select class="o_exported_lists_select">
<option/>
<t t-as="export" t-foreach="existing_exports">
<option t-att-value="export.id">
<t t-esc="export.name"/>
</option>
</t>
</select>
<button class="btn btn-sm btn-default o_delete_exported_list" type="button">Delete</button>
</t>
<t t-name="Throbber">
<div>
<div class="oe_blockui_spin" style="height: 50px">
<img src="/web/static/src/img/spin.png" style="animation: fa-spin 1s infinite steps(12);"/>
</div>
<br/>
<div class="oe_throbber_message" style="color:white"/>
</div>
</t>
<t t-name="Spinner">
<div class="o_spinner">
<i class="fa fa-spinner fa-spin"/>
</div>
</t>
<t t-name="M2ODialog">
<div>
<p/>
Name:
<input class="o_input" type="text"/>
</div>
</t>
<t t-name="FieldMany2ManyCheckBoxes">
<div>
<div t-as="m2m_value" t-foreach="widget.m2mValues">
<t t-set="id_for_label" t-value="'o_many2many_checkbox_' + _.uniqueId()"/>
<div class="o_checkbox">
<input t-att-data-record-id="JSON.stringify(m2m_value[0])" t-att-id="id_for_label" type="checkbox"/>
<span/>
</div>
<label class="o_form_label" t-att-for="id_for_label">
<t t-esc="m2m_value[1]"/>
</label>
</div>
</div>
</t>
<t t-name="StatInfo">
<span class="o_stat_value">
<t t-esc="value"/>
</span>
<span class="o_stat_text">
<t t-esc="text"/>
</span>
</t>
<t t-name="toggle_button">
<button class="o_icon_button" t-att-aria-label="widget.string" t-att-title="widget.string" type="button">
<i class="fa fa-circle" t-att-title="widget.string"/>
</button>
</t>
<div t-name="Pager">
<span class="o_pager_counter">
<span class="o_pager_value"/>
/
<span class="o_pager_limit"/>
</span>
<span class="btn-group btn-group-sm">
<t t-if="widget.options.withAccessKey">
<t t-set="att_prev" t-value="{'accesskey': 'p'}"/>
<t t-set="att_next" t-value="{'accesskey': 'n'}"/>
</t>
<button aria-label="Previous" class="fa fa-chevron-left btn btn-icon o_pager_previous" t-att="att_prev" tabindex="-1" type="button"/>
<button aria-label="Next" class="fa fa-chevron-right btn btn-icon o_pager_next" t-att="att_next" tabindex="-1" type="button"/>
</span>
</div>
<t t-name="AceEditor">
<div class="oe_form_field o_ace_view_editor oe_ace_open">
<div class="ace-view-editor"/>
</div>
</t>
<t t-name="notification-box">
<div role="alert" t-attf-class="o_notification_box mb0 alert alert-dismissible alert-{{type}}">
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true" class="fa fa-times"/>
</button>
</div>
</t>
<t t-name="translation-alert">
<div>
Please update translations of :
<t t-as="field" t-foreach="fields">
<strong>
<a class="oe_field_translate" href="#" t-att-name="field.name">
<t t-esc="field.string"/>
<t t-if="!field_last">, </t>
</a>
</strong>
</t>
</div>
</t>
<t t-name="UserMenu">
<li class="o_user_menu">
<a aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="#">
<img class="img-circle oe_topbar_avatar" t-att-src="_s + '/web/static/src/img/user_menu_avatar.png'"/>
<span class="oe_topbar_name"/>
</a>
<ul class="dropdown-menu" role="menu">
<t t-call="UserMenu.Actions"/>
</ul>
</li>
</t>
<t t-name="UserMenu.Actions">
<li>
<a data-menu="documentation" href="#">Documentation</a>
</li>
<li>
<a data-menu="support" href="#">Support</a>
</li>
<li class="divider"/>
<li>
<a data-menu="settings" href="#">Preferences</a>
</li>
<li>
<a data-menu="account" href="#">My Odoo.com account</a>
</li>
<li>
<a data-menu="logout" href="#">Log out</a>
</li>
</t>
<t t-name="SwitchCompanyMenu">
<li class="o_switch_company_menu">
<a aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="#">
<span t-attf-class="#{widget.isMobile ? 'fa fa-building-o' : 'oe_topbar_name'}"/>
<span class="caret"/>
</a>
<ul class="dropdown-menu" role="menu"/>
</li>
</t>
<t t-name="EnterpriseUpgrade">
<div class="row">
<div class="col-xs-6">
Get this feature and much more with Odoo Enterprise!
<ul class="list-unstyled">
<li>
<i class="fa fa-check"/>
Access to all Enterprise Apps
</li>
<li>
<i class="fa fa-check"/>
New design
</li>
<li>
<i class="fa fa-check"/>
Mobile support
</li>
<li>
<i class="fa fa-check"/>
Upgrade to future versions
</li>
<li>
<i class="fa fa-check"/>
Bugfixes guarantee
</li>
<li>
<a href="http://www.odoo.com/editions" target="_blank">
<i class="fa fa-plus"/>
And more
</a>
</li>
</ul>
</div>
<div class="col-xs-6">
<img class="img-responsive" draggable="false" t-att-src="_s + "/web/static/src/img/enterprise_upgrade.jpg""/>
</div>
</div>
</t>
<t t-name="BaseSetting.Tabs">
<t t-as="tab" t-foreach="tabItems">
<div class="tab" t-attf-data-key="#{tab.key}">
<div class="icon hidden-xs" t-attf-style="background : url('#{imgurl}') no-repeat center;background-size:contain;"/>
<span class="app_name">
<t t-esc="tab.string"/>
</span>
</div>
</t>
</t>
<t t-name="BaseSetting.SearchHeader">
<div class="settingSearchHeader o_hidden">
<img class="icon" t-att-src="imgurl"/>
<span class="appName">
<t t-esc="string"/>
</span>
</div>
</t>
<t t-name="AttachDocument">
<button class="btn btn-sm btn-default o_attachment_button">
<span class="o_attach_document">
<t t-esc="widget.node.attrs.string"/>
</span>
<span class="hide">
<t t-call="HiddenInputFile">
<t t-set="fileupload_id" t-value="widget.fileuploadID"/>
<t t-set="fileupload_action" t-translation="off">/web/binary/upload_attachment</t>
<t t-set="multi_upload" t-value="true"/>
<input name="model" t-att-value="widget.res_model" type="hidden"/>
<input name="id" t-att-value="widget.res_id" type="hidden"/>
<input name="session_id" t-att-value="widget.getSession().session_id" type="hidden"/>
</t>
</span>
</button>
</t>
<t t-name="KanbanView.buttons">
<div>
<button accesskey="c" class="btn btn-primary btn-sm o-kanban-button-new" type="button">
<t t-esc="create_text || _t('Create')"/>
</button>
</div>
</t>
<t t-name="KanbanView.Group">
<div t-att-data-id="widget.id or widget.db_id" t-attf-class="o_kanban_group#{widget.data_records.length == 0 ? ' o_kanban_no_records' : ''}">
<div class="o_kanban_header">
<div class="o_kanban_header_title" data-delay="500" t-att-title="widget.data_records.length + ' records'">
<span class="o_column_title">
<t t-esc="widget.title"/>
</span>
<span class="o_column_unfold">
<i class="fa fa-arrows-h"/>
</span>
<span class="o_kanban_config dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">
<i class="fa fa-gear"/>
</a>
<ul class="dropdown-menu" role="menu">
<li>
<a class="o_kanban_toggle_fold" href="#">Fold</a>
</li>
<t t-if="widget.grouped_by_m2o">
<li t-if="widget.editable and widget.id">
<a class="o_column_edit" href="#">Edit Stage</a>
</li>
<li t-if="widget.deletable and widget.id">
<a class="o_column_delete" href="#">Delete</a>
</li>
</t>
</ul>
</span>
<span class="o_kanban_quick_add" t-if="widget.quick_create">
<i class="fa fa-plus"/>
</span>
</div>
</div>
<div class="o_kanban_load_more" t-if="widget.remaining > 0">
<t t-call="KanbanView.LoadMore"/>
</div>
</div>
</t>
<t t-name="KanbanView.LoadMore">
<a href="#">
Load more... (
<t t-esc="widget.remaining"/>
remaining)
</a>
</t>
<t t-name="KanbanView.ColumnQuickCreate">
<div class="o_column_quick_create">
<div class="o_quick_create_folded">
<span class="o_kanban_add_column">
<i class="fa fa-plus"/>
</span>
<span class="o_kanban_title">Add a new Column</span>
</div>
<div class="o_quick_create_unfolded">
<div class="o_kanban_header">
<div class="input-group">
<input class="o_input" placeholder="Column title" type="text"/>
<span class="input-group-btn">
<button class="btn btn-sm btn-primary o_kanban_add" type="button">Add</button>
</span>
</div>
<t t-if="widget.examples">
<span class="btn-link o_kanban_examples">Examples</span>
</t>
<span class="o_discard_msg text-muted pull-right">Esc to discard</span>
</div>
<div class="o_kanban_muted_record"/>
<div class="o_kanban_muted_record"/>
<div class="o_kanban_muted_record"/>
</div>
</div>
</t>
<t t-name="KanbanView.RecordQuickCreate.buttons">
<div>
<button class="btn btn-sm btn-primary o_kanban_add">Add</button>
<button class="btn btn-sm btn-primary o_kanban_edit">Edit</button>
<button class="btn btn-sm btn-default o_kanban_cancel ml8">Discard</button>
</div>
</t>
<t t-name="KanbanColorPicker">
<li t-as="color" t-foreach="12">
<a href="#" t-att-data-color="color_index" t-attf-class="oe_kanban_color_#{color}"/>
</li>
</t>
<t t-name="GraphCustomTooltip">
<table>
<tbody>
<tr>
<td class="legend-color-guide">
<div t-attf-style="background-color: #{color};"/>
</td>
<td class="key">
<t t-esc="key"/>
</td>
<td class="value">
<t t-esc="value"/>
</td>
</tr>
</tbody>
</table>
</t>
<t t-name="KanbanView.ColumnProgressBar">
<div class="o_kanban_counter">
<div class="o_kanban_counter_progress progress">
<t t-as="color" t-foreach="widget.colors">
<t t-set="count" t-value="widget.subgroupCounts and widget.subgroupCounts[color] or 0"/>
<div t-att-data-filter="color" t-attf-class="progress-bar transition-off bg-#{color_value}-full#{count ? ' o_bar_has_records' : ''}#{widget.activeFilter ? ' active progress-bar-striped' : ''}" t-attf-data-original-title="#{count} #{color}" t-attf-style="width: #{count ? (count * 100 / widget.groupCount) : 0}%;"/>
</t>
</div>
<div class="o_kanban_counter_side">
<b>
<t t-esc="widget.totalCounterValue || 0"/>
</b>
</div>
</div>
</t>
<div class="o_kanban_examples_dialog" t-name="KanbanView.ExamplesDialog">
<div class="o_kanban_examples_dialog_nav">
<ul class="nav nav-pills nav-stacked">
<t t-as="example" t-foreach="examples">
<li t-att-class="example_index == 0 and 'active' or None">
<a data-toggle="tab" t-attf-href="#example_#{example_index}">
<t t-esc="example.name"/>
</a>
</li>
</t>
</ul>
</div>
<div class="o_kanban_examples_dialog_content">
<div class="tab-content">
<t t-as="example" t-foreach="examples">
<div t-attf-class="tab-pane fade #{example_index == 0 and 'active in' or ''}" t-attf-id="example_#{example_index}">
<div class="o_kanban_examples_description" t-if="example.description">
<t t-raw="example.description"/>
</div>
<div class="o_kanban_examples">
<t t-as="column" t-foreach="example.columns">
<div class="o_kanban_examples_group">
<h6>
<b>
<t t-esc="column"/>
</b>
</h6>
<t t-foreach="_.random(1,4)">
<t t-call="KanbanView.ExamplesDialog.RecordGhost"/>
</t>
</div>
</t>
</div>
</div>
</t>
</div>
</div>
</div>
<t t-name="KanbanView.ExamplesDialog.RecordGhost">
<div class="o_kanban_examples_ghost">
<div class="o_ghost_content"/>
<div class="o_ghost_content o_ghost_tag"/>
<img class="pull-right o_ghost_avatar" src="/base/static/img/avatar.png"/>
</div>
</t>
<t t-name="KanbanView.MobileTabs">
<div class="o_kanban_mobile_tabs">
<t t-as="group" t-foreach="data">
<div class="o_kanban_mobile_tab" t-att-data-id="group.res_id or group.id">
<span class="o_column_title">
<t t-esc="group.value"/>
</span>
</div>
</t>
</div>
</t>
<t t-name="rainbow_man.notification">
<div class="o_reward">
<svg class="o_reward_rainbow" viewBox="0 0 340 180">
<path d="M270,170a100,100,0,0,0-200,0" style="stroke:#FF9E80;"/>
<path d="M290,170a120,120,0,0,0-240,0" style="stroke:#FFE57F;"/>
<path d="M310,170a140,140,0,0,0-280,0" style="stroke:#80D8FF;"/>
<path d="M330,170a160,160,0,0,0-320,0" style="stroke:#c794ba;"/>
</svg>
<div class="o_reward_stars" t-as="star" t-foreach="[1, 2, 3, 4]">
<t t-call="rainbow_man.star">
<t t-set="class" t-value="star"/>
</t>
</div>
<div class="o_reward_face_group">
<svg style="display:none">
<symbol id="thumb">
<path d="M10,52 C6,51 3,48 3,44 C2,42 3,39 5,38 C3,36 2,34 2,32 C2,29 3,27 5,26 C3,24 2,21 2,19 C2,15 7,12 10,12 L23,12 C23,11 23,11 23,11 L23,10 C23,8 24,6 25,4 C27,2 29,2 31,2 C33,2 35,2 36,4 C38,5 39,7 39,10 L39,38 C39,41 37,45 35,47 C32,50 28,51 25,52 L10,52 L10,52 Z" fill="#FBFBFC"/>
<polygon fill="#ECF1FF" points="25 11 25 51 5 52 5 12"/>
<path d="M31,0 C28,0 26,1 24,3 C22,5 21,7 21,10 L10,10 C8,10 6,11 4,12 C2,14 1,16 1,19 C1,21 1,24 2,26 C1,27 1,29 1,32 C1,34 1,36 2,38 C1,40 0,42 1,45 C1,50 5,53 10,54 L25,54 C29,54 33,52 36,49 C39,46 41,42 41,38 L41,10 C41,4 36,3.38176876e-16 31,0 M31,4 C34,4 37,6 37,10 L37,38 C37,41 35,44 33,46 C31,48 28,49 25,50 L10,50 C7,49 5,47 5,44 C4,41 6,38 9,37 L9,37 C6,37 5,35 5,32 C5,28 6,26 9,26 L9,26 C6,26 5,22 5,19 C5,16 8,14 11,14 L23,14 C24,14 25,12 25,11 L25,10 C25,7 28,4 31,4" fill="#A1ACBA" id="Shape"/>
</symbol>
</svg>
<span class="o_reward_face" t-attf-style="background-image:url(#{widget.options.img_url});"/>
<svg class="o_reward_thumbup" viewBox="0 0 42 60">
<use href="#thumb"/>
</svg>
<div class="o_reward_msg_container">
<svg class="o_reward_thumb_right" viewBox="0 0 100 55">
<use href="#thumb" transform="scale(-1, 1.2) rotate(-90) translate(-42,-60)"/>
</svg>
<div class="o_reward_msg">
<div class="o_reward_msg_card">
<div class="o_reward_msg_content"/>
<div class="o_reward_shadow_container">
<div class="o_reward_shadow"/>
</div>
</div>
</div>
</div>
</div>
</div>
</t>
<t t-name="rainbow_man.star">
<svg height="34px" t-attf-class="star{{ star }}" viewBox="0 0 35 34" width="35px">
<path d="M33,15.9 C26.3557814,13.6951256 21.1575294,8.45974313 19,1.8 C19,1.24771525 18.5522847,0.8 18,0.8 C17.4477153,0.8 17,1.24771525 17,1.8 C14.6431206,8.69377078 9.02624222,13.9736364 2,15.9 C1.36487254,15.9 0.85,16.4148725 0.85,17.05 C0.85,17.6851275 1.36487254,18.2 2,18.2 C8.6215326,20.3844521 13.8155479,25.5784674 16,32.2 C16,32.7522847 16.4477153,33.2 17,33.2 C17.5522847,33.2 18,32.7522847 18,32.2 C20.3568794,25.3062292 25.9737578,20.0263636 33,18.1 C33.6351275,18.1 34.15,17.5851275 34.15,16.95 C34.15,16.3148725 33.6351275,15.8 33,15.8" fill="#fff"/>
</svg>
</t>
<div t-name="report.client_action">
<iframe class="o_report_iframe"/>
</div>
<t t-name="report.client_action.ControlButtons">
<div class="o_report_no_edit_mode">
<button class="btn btn-primary btn-sm o_report_print" title="Print" type="button">Print</button>
</div>
<div class="o_edit_mode_available">
<button class="btn btn-default btn-sm o_report_edit" title="Edit" type="button">Edit</button>
</div>
<div class="o_report_edit_mode">
<button class="btn btn-primary btn-sm o_report_save" title="Save" type="button">Save</button>
<button class="btn btn-default btn-sm o_report_discard" title="Discard" type="button">Discard</button>
</div>
</t>
<div class="o_calendar_container" t-name="CalendarView">
<div class="o_calendar_view">
<div class="o_calendar_buttons"/>
<div class="o_calendar_widget"/>
</div>
<div class="o_calendar_sidebar_container hidden-xs">
<i class="o_calendar_sidebar_toggler fa"/>
<div class="o_calendar_sidebar">
<div class="o_calendar_mini"/>
</div>
</div>
</div>
<t t-name="calendar-box">
<t t-set="color" t-value="widget.getColor(event.color_index)"/>
<div t-att-style="typeof color === 'string' ? ('background-color:'+color)+';' : ''" t-attf-class="#{record.is_highlighted && record.is_highlighted.value ? 'o_event_hightlight' : ''} #{typeof color === 'number' ? 'o_calendar_color_'+color : ''}">
<div class="fc-time"/>
<div class="o_fields">
<t t-as="name" t-foreach="widget.displayFields">
<div t-attf-class="o_field_#{name} o_field_type_#{fields[name].type}">
<t t-if="widget.displayFields[name].avatar_field">
<t t-if="!isMobile">
<t t-esc="fields[name].string"/>
:
</t>
<div class="o_calendar_avatars pull-right">
<t t-as="image" t-foreach="widget.getAvatars(record, name, widget.displayFields[name].avatar_field).slice(0,3)">
<t t-raw="image"/>
</t>
<span t-if="record[name].length - 3 > 0">
+
<t t-esc="record[name].length - 3"/>
</span>
</div>
</t>
<t t-else="">
<t t-esc="format(record, name)"/>
</t>
</div>
</t>
</div>
</div>
</t>
<t t-name="CalendarView.sidebar.filter">
<div class="o_calendar_filter">
<h3 t-if="widget.title">
<t t-esc="widget.title"/>
</h3>
<div class="o_calendar_filter_items">
<div class="o_calendar_filter_item" t-as="filter" t-att-data-id="filter.id" t-att-data-value="filter.value" t-foreach="widget.filters" t-if="filter.display == null || filter.display">
<div class="o_checkbox">
<input name="selection" t-att-checked="(filter.active ? true : undefined)" type="checkbox"/>
<span/>
</div>
<t t-if="filter.value == 'all'">
<span>
<i class="fa fa-users fa-fw o_cal_avatar"/>
</span>
</t>
<t t-if="widget.avatar_field && (filter.value != 'all')">
<img class="o_cal_avatar" t-attf-src="/web/image/#{widget.avatar_model}/#{filter.value}/#{widget.avatar_field}"/>
</t>
<t t-set="color" t-value="widget.getColor(filter.color_index)"/>
<span t-attf-class="color_filter o_underline_color_#{widget.getColor(filter.color_index)}" t-if="typeof color === 'number'">
<t t-esc="filter.label"/>
</span>
<span t-attf-style="border-bottom: 4px solid #{color};" t-elif="color">
<t t-esc="filter.label"/>
</span>
<span t-else="">
<t t-esc="filter.label"/>
</span>
<t t-if="filter.id">
<span class="o_remove fa fa-times" title="Remove this favorite from the list"/>
</t>
</div>
</div>
</div>
</t>
<t t-name="CalendarView.buttons">
<div class="o_calendar_buttons">
<t t-if="!isMobile">
<button class="o_calendar_button_prev btn btn-sm btn-primary">
<span class="fa fa-arrow-left"/>
</button>
<button class="o_calendar_button_today btn btn-sm btn-primary">Today</button>
<button class="o_calendar_button_next btn btn-sm btn-primary">
<span class="fa fa-arrow-right"/>
</button>
</t>
<div class="btn-group btn-group-sm">
<button class="o_calendar_button_day btn btn-sm btn-default" type="button">Day</button>
<button class="o_calendar_button_week btn btn-sm btn-default" type="button">Week</button>
<button class="o_calendar_button_month btn btn-sm btn-default" type="button">Month</button>
</div>
</div>
</t>
<t t-name="CalendarView.TodayButtonMobile">
<span class="fa-stack o_calendar_button_today">
<i class="fa fa-calendar-o fa-stack-2x"/>
<strong class="o_calendar_text fa-stack-1x">
<t t-esc="moment().date()"/>
</strong>
</span>
</t>
<div class="o_calendar_quick_create" t-name="CalendarView.quick_create">
<div class="form-group">
<label class="control-label" for="name">Summary:</label>
<input class="o_input" name="name" t-att-value="widget.dataTemplate.name or None" type="text"/>
</div>
</div>
<div t-attf-class="o_tooltip #{widget.info.position}" t-name="Tip">
<div class="o_tooltip_overlay"/>
<div class="o_tooltip_content" t-attf-style="width: #{widget.info.width}px;">
<t t-raw="widget.info.content"/>
</div>
</div>
<t t-extend="WebClient.DebugManager.Global">
<t t-jquery="li > a[data-action='select_view']" t-operation="after">
<t t-if="manager._is_admin">
<li t-if="manager.consume_tours_enabled">
<a data-action="consume_tours" href="#">Disable Tours</a>
</li>
<li>
<a data-action="start_tour" href="#">Start Tour</a>
</li>
</t>
</t>
</t>
<t t-name="WebClient.DebugManager.ToursDialog">
<div>
<table class="table table-condensed table-striped table-responsive">
<tr>
<th>Name</th>
<th>Path</th>
<th/>
</tr>
<tr t-as="tour" t-foreach="tours">
<td>
<t t-esc="tour"/>
</td>
<td>
<t t-esc="tours[tour].url"/>
</td>
<td>
<button class="btn btn-sm btn-primary fa fa-play o_start_tour" t-att-data-name="tour" type="button"/>
</td>
</tr>
</table>
</div>
</t>
<t t-name="mail.activity_items">
<div class="o_thread_date_separator o_border_dashed" data-target="#o_chatter_planned_activities" data-toggle="collapse">
<span class="o_thread_date btn">
<i class="fa fa-fw fa-caret-down"/>
Planned activities
<small class="o_chatter_planned_activities_summary ml8">
<span class="label img-circle label-danger">
<t t-esc="nbOverdueActivities"/>
</span>
<span class="label img-circle label-warning">
<t t-esc="nbTodayActivities"/>
</span>
<span class="label img-circle label-success">
<t t-esc="nbPlannedActivities"/>
</span>
</small>
</span>
</div>
<div class="collapse in" id="o_chatter_planned_activities">
<t t-as="activity" t-foreach="activities">
<div class="o_thread_message" style="margin-bottom: 10px">
<div class="o_thread_message_sidebar">
<div class="o_avatar_stack">
<img class="o_thread_message_avatar img-circle mb8" t-att-title="activity.user_id[1]" t-attf-src="/web/image#{activity.user_id[0] >= 0 ? ('/res.users/' + activity.user_id[0] + '/image_small') : ''}"/>
<i t-att-class="'o_avatar_icon fa ' + activity.icon + ' bg-' + (activity.state == 'planned'? 'success' : (activity.state == 'today'? 'warning' : 'danger')) + '-full'" t-att-title="activity.activity_type_id[1]"/>
</div>
</div>
<div class="o_thread_message_core">
<div class="o_mail_info">
<strong>
<span t-attf-class="o_activity_date o_activity_color_#{activity.state}">
<t t-esc="activity.label_delay"/>
</span>
</strong>
:
<strong t-if="activity.summary">
“
<t t-esc="activity.summary"/>
”
</strong>
<strong t-if="!activity.summary">
<t t-esc="activity.activity_type_id[1]"/>
</strong>
<em> for </em>
<t t-esc="activity.user_id[1]"/>
<a class="btn btn-link btn-info text-muted collapsed o_activity_info ml4" data-toggle="collapse" role="button" t-attf-data-target="#o_chatter_activity_info_#{activity.id}">
<i class="fa fa-info-circle"/>
</a>
<div class="o_thread_message_collapse collapse" t-attf-id="o_chatter_activity_info_#{activity.id}">
<dl class="dl-horizontal well">
<dt>Activity type</dt>
<dd class="mb8">
<t t-esc="activity.activity_type_id[1]"/>
</dd>
<dt>Created on</dt>
<dd class="mb8">
<t t-esc="activity.create_date.format(datetime_format)"/>
</dd>
<dt>Assigned to</dt>
<dd class="mb8">
<img class="img-circle mr4" height="18" t-att-title="activity.user_id[1]" t-attf-src="/web/image#{activity.user_id[0] >= 0 ? ('/res.users/' + activity.user_id[0] + '/image_small') : ''}" width="18"/>
<b>
<t t-esc="activity.user_id[1]"/>
</b>
<em>, due on </em>
<span t-attf-class="o_activity_color_#{activity.state}">
<t t-esc="activity.date_deadline.format(date_format)"/>
</span>
</dd>
</dl>
</div>
</div>
<div class="o_thread_message_note small" t-if="activity.note">
<t t-raw="activity.note"/>
</div>
<div class="o_thread_message_tools btn-group">
<a class="btn btn-link btn-success text-muted btn-sm o_activity_done o_activity_link mr8" data-toggle="popover" href="#" t-att-data-activity-id="activity.id" t-att-data-previous-activity-type-id="activity.activity_type_id[0]">
<i class="fa fa-check"/>
Mark Done
</a>
<a class="btn btn-link btn-default text-muted btn-sm o_activity_edit o_activity_link" href="#" t-att-data-activity-id="activity.id">
<i class="fa fa-pencil"/>
Edit
</a>
<a class="btn btn-link btn-sm btn-danger text-muted o_activity_unlink o_activity_link" href="#" t-att-data-activity-id="activity.id">
<i class="fa fa-times"/>
Cancel
</a>
</div>
</div>
</div>
</t>
</div>
</t>
<t t-name="mail.activity_feedback_form">
<div>
<textarea class="form-control" id="activity_feedback" placeholder="Write Feedback" rows="3"/>
<div class="mt8">
<button class="btn btn-xs btn-primary o_activity_popover_done_next" t-att-data-previous-activity-type-id="previous_activity_type_id" type="button"> Done & Schedule Next</button>
<button class="btn btn-xs btn-primary o_activity_popover_done" type="button"> Done</button>
<button class="btn btn-xs btn-link o_activity_popover_discard" type="button"> Discard</button>
</div>
</div>
</t>
<div t-attf-class="o_chat_composer #{widget.extended ? 'o_chat_composer_extended' : (widget.notInline ? '' : 'o_chat_inline_composer')} #{widget.isMini ? 'o_chat_mini_composer' : ''}" t-name="mail.ChatComposer">
<div class="o_composer_container">
<img class="o_thread_message_sidebar o_chatter_avatar img-circle" height="36" t-att-src="widget.avatarURL" t-if="widget.avatarURL" width="36"/>
<div class="o_composer_subject" t-if="widget.extended">
<input class="o_input" placeholder="Subject" tabindex="1" type="text"/>
</div>
<div t-attf-class="o_composer #{widget.extended ? 'o_extended_composer' : ''}">
<div class="o_composer_input">
<textarea class="o_input o_composer_text_field" placeholder="Write something..." tabindex="2"/>
<div class="o_chatter_composer_tools">
<button class="btn btn-sm btn-icon fa fa-smile-o o_composer_button_emoji" data-toggle="popover" tabindex="4" type="button"/>
<button class="btn btn-sm btn-icon fa fa-paperclip o_composer_button_add_attachment" tabindex="5" type="button"/>
<button class="btn btn-sm btn-icon fa fa-paper-plane-o o_composer_button_send" t-if="widget.options.isMobile" tabindex="3" type="button"/>
</div>
</div>
</div>
<div class="o_composer_attachments_list"/>
</div>
<div class="o_composer_send">
<button class="btn btn-sm btn-primary o_composer_button_send hidden-xs" tabindex="3" type="button">
<t t-esc="widget.options.send_text"/>
</button>
</div>
<span class="hide">
<t t-call="HiddenInputFile">
<t t-set="fileupload_id" t-value="widget.fileupload_id"/>
<t t-set="fileupload_action" t-translation="off">/web/binary/upload_attachment</t>
<t t-set="multi_upload" t-value="true"/>
<input name="model" type="hidden" value="mail.compose.message"/>
<input name="id" type="hidden" value="0"/>
<input name="session_id" t-att-value="widget.getSession().session_id" type="hidden"/>
</t>
</span>
</div>
<div class="o_mail_emoji_container" t-name="mail.ChatComposer.emojis">
<t t-as="emoji" t-foreach="emojis">
<button class="btn btn-link o_mail_emoji" t-att-data-emoji="emoji.source" t-att-title="emoji.description">
<t t-raw="emoji.unicode_source"/>
</button>
</t>
</div>
<t t-name="mail.AbstractMentionSuggestions">
<ul aria-labelledby="dropdownMailMentionMenu" class="dropdown-menu">
<t t-as="suggestion" t-foreach="suggestions">
<li class="divider" t-if="suggestion.divider"/>
<li class="o_mention_proposition" t-att-data-id="suggestion.id" t-if="!suggestion.divider">
<a href="#"/>
</li>
</t>
</ul>
</t>
<t t-extend="mail.AbstractMentionSuggestions" t-name="mail.MentionPartnerSuggestions">
<t t-jquery=".o_mention_proposition a" t-operation="append">
<span class="o_mention_name">
<t t-esc="suggestion.name"/>
</span>
<t t-if="suggestion.email">
<span class="o_mention_info">
(
<t t-esc="suggestion.email"/>
)
</span>
</t>
</t>
</t>
<t t-extend="mail.AbstractMentionSuggestions" t-name="mail.MentionChannelSuggestions">
<t t-jquery=".o_mention_proposition a" t-operation="append">
<span class="o_mention_name">
<t t-esc="suggestion.name"/>
</span>
</t>
</t>
<t t-extend="mail.AbstractMentionSuggestions" t-name="mail.MentionCannedResponseSuggestions">
<t t-jquery=".o_mention_proposition a" t-operation="append">
<span class="o_mention_name">
<t t-esc="suggestion.source"/>
</span>
<span class="o_mention_info">
<t t-esc="suggestion.substitution"/>
</span>
</t>
</t>
<t t-extend="mail.AbstractMentionSuggestions" t-name="mail.MentionCommandSuggestions">
<t t-jquery=".o_mention_proposition a" t-operation="append">
<span class="o_mention_name">
/
<t t-esc="suggestion.name"/>
</span>
<span class="o_mention_info">
<t t-esc="suggestion.help"/>
</span>
</t>
</t>
<t t-extend="FieldMany2ManyTag" t-name="FieldMany2ManyTagsEmail">
<t t-jquery=".o_badge_text" t-operation="replace">
<span class="o_badge_text" t-attf-title="#{el.email}">
<t t-esc="el.display_name"/>
</span>
</t>
</t>
<t t-extend="mail.ChatComposer" t-name="mail.chatter.ChatComposer">
<t t-jquery=".o_composer_container" t-operation="before">
<t t-if="!widget.options.is_log">
<small class="o_chatter_composer_info">
<b class="text-muted">To: </b>
<em class="text-muted">Followers of </em>
<b>
<t t-if="widget.options.record_name">
"
<t t-esc="widget.options.record_name"/>
"
</t>
<t t-if="!widget.options.record_name"> this document </t>
</b>
</small>
<div class="o_composer_suggested_partners">
<t t-as="recipient" t-foreach="widget.suggested_partners">
<div t-attf-title="Add as recipient and follower (reason: #{recipient.reason})">
<div class="o_checkbox">
<input t-att-checked="recipient.checked ? 'checked' : undefined" t-att-data-fullname="recipient.full_name" type="checkbox"/>
<span/>
</div>
<t t-esc="recipient.name"/>
<t t-if="recipient.email_address">
(
<t t-esc="recipient.email_address"/>
)
</t>
</div>
</t>
</div>
</t>
</t>
<t t-jquery=".o_composer_button_add_attachment" t-operation="after">
<button class="btn btn-sm btn-icon fa fa-expand o_composer_button_full_composer" tabindex="6" type="button"/>
</t>
</t>
<t t-name="mail.Chatter.Buttons">
<button class="btn btn-sm btn-link o_chatter_button_new_message" disabled="disabled" t-if="new_message_btn" title="Send a message" type="button"> Send message </button>
<button class="btn btn-sm btn-link o_chatter_button_log_note" disabled="disabled" t-if="log_note_btn" title="Log a note. Followers will not be notified."> Log note </button>
<button class="btn btn-sm btn-link o_chatter_button_schedule_activity" disabled="disabled" t-if="schedule_activity_btn" title="Log or schedule an activity">
<i class="fa fa-clock-o"/>
<t t-if="isMobile">Activity</t>
<t t-else="">Schedule activity</t>
</button>
</t>
<t t-name="mail.Chatter">
<div class="o_chatter">
<div class="o_chatter_topbar"/>
</div>
</t>
<t t-name="mail.discuss">
<div class="o_mail_chat">
<div class="o_mail_chat_sidebar"/>
<div class="o_mail_chat_content">
<t t-if="widget.notification_bar">
<div class="o_mail_annoying_notification_bar">
<span class="o_mail_request_permission">
Odoo needs your permission to
<a href="#"> enable desktop notifications</a>
.
</span>
<span class="fa fa-close"/>
</div>
</t>
</div>
</div>
</t>
<t t-name="mail.chat.Sidebar">
<div class="o_mail_chat_sidebar">
<div data-channel-id="channel_inbox" t-attf-class="o_mail_chat_title_main o_mail_chat_channel_item #{(active_channel_id === 'channel_inbox') ? 'o_active': ''}">
<span class="o_channel_name">
<i class="fa fa-inbox mr8"/>
Inbox
</span>
<t t-set="counter" t-value="needaction_counter"/>
<t t-call="mail.chat.SidebarNeedaction"/>
</div>
<div data-channel-id="channel_starred" t-attf-class="o_mail_chat_title_main o_mail_chat_title_starred o_mail_chat_channel_item #{(active_channel_id === 'channel_starred') ? 'o_active': ''}">
<span class="o_channel_name">
<i class="fa fa-star-o mr8"/>
Starred
</span>
<t t-set="counter" t-value="starred_counter"/>
<t t-call="mail.chat.SidebarNeedaction"/>
</div>
<hr class="mb8"/>
<t t-set="channel_type" t-value="'public'"/>
<t t-call="mail.chat.SidebarTitle">
<t t-set="channel_title">Channels</t>
<t t-set="channel_icon" t-value="fa-users"/>
</t>
<t t-call="mail.chat.SidebarItems">
<t t-set="display_hash" t-value="true"/>
<t t-set="input_placeholder">Add a channel</t>
</t>
<t t-set="channel_type" t-value="'dm'"/>
<t t-call="mail.chat.SidebarTitle">
<t t-set="channel_title">Direct Messages</t>
<t t-set="channel_icon" t-value="fa-user"/>
</t>
<t t-call="mail.chat.SidebarItems">
<t t-set="display_status" t-value="true"/>
<t t-set="input_placeholder">User name</t>
</t>
<t t-set="channel_type" t-value="'private'"/>
<t t-call="mail.chat.SidebarTitle">
<t t-set="channel_title">Private Channels</t>
<t t-set="channel_icon" t-value="fa-eye-slash"/>
</t>
<t t-call="mail.chat.SidebarItems">
<t t-set="input_placeholder">Add a private channel</t>
<t t-set="display_hash" t-value="true"/>
</t>
</div>
</t>
<t t-name="mail.chat.SidebarNeedaction">
<span t-attf-class="o_mail_sidebar_needaction badge #{(!counter ? 'hide' : '')}">
<t t-esc="counter"/>
</span>
</t>
<t t-name="mail.chat.SidebarTitle">
<t t-if="disable_add_channel">
<t t-set="empty" t-value="true"/>
<t t-as="channel" t-foreach="channels">
<t t-if="channel.type === channel_type">
<t t-set="empty" t-value="false"/>
</t>
</t>
</t>
<t t-if="!disable_add_channel || !empty">
<div class="o_mail_sidebar_title">
<h4 t-att-class="channel_type == 'public' ? 'o_mail_open_channels' : ''">
<i t-attf-class="mr4 fa-fw fa #{channel_icon}" t-if="channel_icon"/>
<b>
<t t-esc="channel_title"/>
</b>
</h4>
<span class="fa fa-plus o_add" t-attf-data-type="#{channel_type}" t-if="!disable_add_channel" title="Add"/>
</div>
</t>
</t>
<t t-name="mail.chat.SidebarItems">
<div class="o_mail_add_channel" t-attf-data-type="#{channel_type}" t-if="!disable_add_channel">
<span t-if="display_hash">#</span>
<input class="o_input" t-attf-placeholder="#{input_placeholder}" type="text"/>
</div>
<t t-as="channel" t-foreach="channels">
<t t-set="counter" t-value="channel.is_chat ? channel.unread_counter : channel.needaction_counter"/>
<div t-att-data-channel-id="channel.id" t-att-title="channel.name" t-attf-class="o_mail_chat_channel_item #{channel.unread_counter ? ' o_unread_message' : ''} #{(active_channel_id == channel.id) ? 'o_active': ''}" t-if="channel.type === channel_type">
<span class="o_channel_name">
<span t-if="display_status">
<t t-call="mail.chat.UserStatus">
<t t-set="status" t-value="channel.status"/>
</t>
</span>
<span class="o_mail_hash" t-if="display_hash">#</span>
<t t-esc="channel.name"/>
<i class="fa fa-envelope-o" t-if="channel.mass_mailing" title="Sends messages by email"/>
</span>
<span t-att-data-channel-id="channel.id" t-attf-class="fa fa-cog o_mail_channel_settings" title="Channel settings"/>
<t t-call="mail.chat.SidebarNeedaction"/>
<span t-att-data-channel-id="channel.id" t-attf-class="fa fa-times o_mail_partner_unpin #{counter ? 'hide' : ''}" t-if="! channel.group_based_subscription" title="Leave this channel"/>
</div>
</t>
</t>
<t t-name="mail.chat.UserStatus">
<i class="o_mail_user_status o_user_online fa fa-circle" t-if="status == 'online'" title="Online"/>
<i class="o_mail_user_status o_user_idle fa fa-circle" t-if="status == 'away'" title="Idle"/>
<i class="o_mail_user_status fa fa-circle-o" t-if="status == 'offline'" title="Offline"/>
</t>
<t t-name="mail.chat.MessageSentSnackbar">
<div class="alert o_mail_snackbar" data-dismiss="alert" role="alert">
Message sent in "
<t t-esc="record_name"/>
".
</div>
</t>
<t t-name="mail.chat.ControlButtons">
<div>
<button class="btn btn-primary btn-sm o_mail_chat_button_invite hidden-xs" title="Invite people" type="button">Invite</button>
<button class="btn btn-default btn-sm o_mail_chat_button_mark_read" title="Mark all as read" type="button">Mark all read</button>
<button class="btn btn-default btn-sm o_mail_chat_button_unstar_all" title="Unstar all messages" type="button">Unstar all</button>
<button class="btn btn-default btn-sm o_mail_chat_button_dm visible-xs" title="New Message" type="button">New Message</button>
<button class="btn btn-default btn-sm o_mail_chat_button_public o_mail_chat_button_private visible-xs" t-if="!disable_add_channel" title="New Channel" type="button">New Channel</button>
</div>
</t>
<div t-name="mail.PartnerInviteDialog">
<input class="o_input o_mail_chat_partner_invite_input" id="mail_search_partners" type="text"/>
</div>
<t t-name="mail.discuss_mobile">
<div class="o_mail_chat">
<div class="o_mail_chat_mobile_control_panel"/>
<div class="o_mail_chat_mobile_inbox_buttons">
<button class="btn btn-primary btn-sm visible-xs-inline o_channel_inbox_item" data-type="channel_inbox" title="Inbox" type="button"> Inbox </button>
<button class="btn btn-default btn-sm visible-xs-inline o_channel_inbox_item" data-type="channel_starred" title="Starred" type="button"> Starred </button>
</div>
<div class="o_mail_chat_content"/>
<div class="o_mail_mobile_tabs">
<div class="o_mail_mobile_tab" data-type="channel_inbox">
<span class="fa fa-inbox"/>
<span class="o_tab_title">Inbox</span>
</div>
<div class="o_mail_mobile_tab" data-type="dm">
<span class="fa fa-user"/>
<span class="o_tab_title">Chat</span>
</div>
<div class="o_mail_mobile_tab" data-type="public">
<span class="fa fa-users"/>
<span class="o_tab_title">Channels</span>
</div>
<div class="o_mail_mobile_tab" data-type="private">
<span class="fa fa-eye-slash"/>
<span class="o_tab_title">Private Channels</span>
</div>
</div>
</div>
</t>
<t t-name="mail.chat.MobileTabPane">
<div class="o_mail_chat_tab_pane" t-att-data-type="type">
<div class="o_mail_add_channel" t-att-data-type="type" t-if="!disable_add_channel">
<span t-if="type == 'private' || type == 'public'">#</span>
<t t-if="type == 'private' || type == 'public'" t-set="input_placeholder">Add a channel</t>
<t t-if="type == 'dm'" t-set="input_placeholder">Open chat</t>
<input t-attf-placeholder="#{input_placeholder}" type="text"/>
</div>
<t t-as="channel" t-foreach="channels">
<t t-call="mail.chat.ChannelPreview"/>
</t>
</div>
</t>
<t t-name="mail.chat.ChannelPreview">
<div t-att-data-channel_id="channel.id" t-att-data-res_id="channel.res_id" t-att-data-res_model="channel.model" t-attf-class="o_mail_channel_preview #{channel.unread_counter ? 'o_channel_unread' : ''}">
<div t-attf-class="o_mail_channel_image #{channel.model? 'o_mail_channel_app' : ''}">
<img class="o_mail_channel_image" t-att-src="channel.image_src"/>
<i class="o_mail_user_status o_user_online fa fa-circle" t-if="channel.status === 'online'" title="Online"/>
<i class="o_mail_user_status o_user_idle fa fa-circle" t-if="channel.status === 'away'" title="Idle"/>
</div>
<div class="o_channel_info">
<div class="o_channel_title">
<span class="o_channel_name">
<t t-esc="channel.name"/>
</span>
<span class="o_channel_counter">
<t t-if="channel.unread_counter">
&nbsp;(
<t t-esc="channel.unread_counter"/>
)
</t>
</span>
<span class="o_last_message_date">
<t t-esc="channel.last_message_date"/>
</span>
</div>
<div class="o_last_message_preview" t-if="channel.last_message">
<t t-if="channel.last_message.is_author">
<span class="fa fa-mail-reply"/>
You:
</t>
<t t-else="">
<t t-esc="channel.last_message.displayed_author"/>
:
</t>
<t t-raw="channel.last_message_preview"/>
</div>
</div>
</div>
</t>
<t t-name="mail.Followers">
<div class="o_followers">
<div class="o_followers_title_box">
<button aria-expanded="false" class="btn btn-sm btn-link dropdown-toggle" data-toggle="dropdown">
<i class="fa fa-user"/>
<span class="o_followers_count"/>
</button>
<ul class="dropdown-menu o_followers_list" role="menu"/>
</div>
<div class="o_followers_actions">
<div class="btn-group btn-group-sm o_subtypes_list">
<button class="btn btn-sm btn-link o_followers_follow_button o_followers_notfollow">
<span class="o_follow">Follow</span>
<span class="fa fa-times o_followers_unfollow"/>
<span class="o_followers_unfollow"> Unfollow</span>
<span class="fa fa-check o_followers_following"/>
<span class="o_followers_following"> Following</span>
</button>
<button aria-expanded="false" class="btn btn-sm btn-link dropdown-toggle" data-toggle="dropdown">
<span class="fa fa-bell"/>
</button>
<ul class="dropdown-menu" role="menu"/>
</div>
</div>
</div>
</t>
<t t-name="mail.Followers.partner">
<li class="o_partner">
<img t-att-src="record.avatar_url"/>
<a class="o_mail_redirect" href="#" t-att-data-oe-id="record.res_id" t-att-data-oe-model="record.res_model" t-att-title="record.name">
<t t-esc="record.name"/>
</a>
<i class="fa fa-pencil o_edit_subtype hide" t-att-data-follower-id="record.id" t-att-data-oe-id="record.res_id" t-att-data-oe-model="record.res_model" t-if="record.is_editable" title="Edit subscription"/>
<i class="fa fa-remove o_remove_follower" t-if="widget.isEditable" title="Remove this follower"/>
</li>
</t>
<t t-name="mail.Followers.add_more">
<t t-if="widget.isEditable">
<li class="o_add_follower">
<a href="#"> Add Followers </a>
</li>
<li class="o_add_follower_channel">
<a href="#"> Add Channels </a>
</li>
<li class="divider" t-if="widget.followers.length > 0"/>
</t>
</t>
<t t-name="mail.Followers.subtype">
<li class="o_subtype">
<div class="o_checkbox">
<input class="o_subtype_checkbox" t-att-checked="record.followed" t-att-data-id="record.id" t-att-id="'input_mail_followers_subtype_'+record.id+(dialog ? '_in_dialog': '')" t-att-name="record.name" type="checkbox"/>
<span/>
</div>
<span t-att-for="'input_mail_followers_subtype_'+record.id+(dialog ? '_in_dialog': '')">
<t t-esc="record.name"/>
</span>
<i class="fa fa-warning text-warning" t-if="display_warning"/>
</li>
</t>
<t t-name="mail.Followers.subtypes.warning">
<span class="text-warning">
<i class="fa fa-warning"/>
Be careful with channels following internal notifications
</span>
</t>
<t t-name="mail.chat.MessagingMenu">
<li class="o_mail_navbar_item">
<a aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="#" title="Conversations">
<i class="fa fa-comments"/>
<span class="o_notification_counter badge"/>
</a>
<ul class="o_mail_navbar_dropdown dropdown-menu" role="menu">
<li t-if="widget.isMobile">
<div class="o_mail_navbar_mobile_header">
<button class="btn btn-default btn-sm o_new_message" type="button"> New message </button>
</div>
</li>
<li class="o_mail_navbar_dropdown_top" t-if="!widget.isMobile">
<div>
<button class="btn btn-sm o_filter_button active" type="button"> All </button>
<button class="btn btn-sm o_filter_button" data-filter="chat" type="button"> Chat </button>
<button class="btn btn-sm o_filter_button" data-filter="channels" type="button"> Channels </button>
</div>
<button class="btn btn-sm o_new_message" type="button"> New message </button>
</li>
<li class="o_mail_navbar_dropdown_channels"/>
<li t-if="widget.isMobile">
<div class="o_mail_mobile_tabs">
<div class="o_mail_mobile_tab o_filter_button active">
<span class="fa fa-envelope"/>
<span class="o_tab_title">All</span>
</div>
<div class="o_mail_mobile_tab o_filter_button" data-filter="chat">
<span class="fa fa-user"/>
<span class="o_tab_title">Chat</span>
</div>
<div class="o_mail_mobile_tab o_filter_button" data-filter="channels">
<span class="fa fa-users"/>
<span class="o_tab_title">Channels</span>
</div>
</div>
</li>
</ul>
</li>
</t>
<t t-name="mail.chat.ChannelsPreview">
<t t-if="_.isEmpty(channels)">
<li class="text-center o_no_activity mt16">
<span>No discussion yet...</span>
</li>
</t>
<t t-as="channel" t-foreach="channels">
<t t-call="mail.chat.ChannelPreview"/>
</t>
</t>
<t t-name="mail.chat.ActivityMenuPreview">
<t t-if="_.isEmpty(activities)">
<li class="text-center o_no_activity">
<span>No activities planned.</span>
</li>
</t>
<t t-as="activity" t-foreach="activities">
<div class="o_mail_channel_preview" data-filter="my" t-att-data-model_name="activity.name" t-att-data-res_model="activity.model">
<div class="o_mail_channel_image o_mail_channel_app">
<img t-att-src="activity.icon"/>
</div>
<div class="o_channel_info">
<div class="o_channel_title">
<span class="o_channel_name">
<t t-esc="activity.name"/>
</span>
</div>
<div>
<button class="btn btn-link o_activity_filter_button mr16" data-filter="overdue" t-att-data-model_name="activity.name" t-att-data-res_model="activity.model" t-if="activity.overdue_count" type="button">
<t t-esc="activity.overdue_count"/>
Late
</button>
<span class="o_no_activity mr16" t-if="!activity.overdue_count">0 Late </span>
<button class="btn btn-link o_activity_filter_button mr16" data-filter="today" t-att-data-model_name="activity.name" t-att-data-res_model="activity.model" t-if="activity.today_count" type="button">
<t t-esc="activity.today_count"/>
Today
</button>
<span class="o_no_activity mr16" t-if="!activity.today_count">0 Today </span>
<button class="btn btn-link o_activity_filter_button pull-right" data-filter="upcoming_all" t-att-data-model_name="activity.name" t-att-data-res_model="activity.model" t-if="activity.planned_count" type="button">
<t t-esc="activity.planned_count"/>
Future
</button>
<span class="o_no_activity pull-right" t-if="!activity.planned_count">0 Future</span>
</div>
</div>
</div>
</t>
</t>
<t t-name="mail.chat.ActivityMenu">
<li class="o_mail_navbar_item">
<a aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="#" title="Activities">
<i class="fa fa-clock-o"/>
<span class="o_notification_counter badge"/>
</a>
<ul class="o_mail_navbar_dropdown dropdown-menu" role="menu">
<li class="o_mail_navbar_dropdown_channels"/>
</ul>
</li>
</t>
<t t-name="mail.ChatThread">
<t t-if="messages.length">
<t t-call="mail.ChatThread.LoadMore" t-if="options.display_load_more and options.display_order == ORDER.ASC"/>
<t t-call="mail.ChatThread.Content"/>
<t t-call="mail.ChatThread.LoadMore" t-if="options.display_load_more and options.display_order == ORDER.DESC"/>
</t>
<t t-if="options.display_empty_channel">
<t t-call="mail.EmptyChannel"/>
</t>
<div class="o_mail_no_content" t-if="options.display_no_match">
<div class="o_thread_title">No matches found</div>
<div>
No message matches your search. Try to change your search filters.
</div>
</div>
</t>
<t t-name="DocumentViewer.Content">
<div class="o_viewer_content">
<div class="o_viewer-header">
<span class="o_image_caption">
<i class="fa fa-picture-o mr8" t-if="widget.activeAttachment.type == 'image'"/>
<i class="fa fa-file-text mr8" t-if="widget.activeAttachment.type == 'application/pdf'"/>
<i class="fa fa-video-camera mr8" t-if="widget.activeAttachment.type == 'video'"/>
<t t-esc="widget.activeAttachment.name"/>
<a class="o_download_btn ml8 small" data-placement="right" data-toggle="tooltip" href="#" title="Download">
<i class="fa fa-fw fa-download"/>
</a>
</span>
<a class="o_close_btn pull-right" href="#">×</a>
</div>
<div class="o_viewer_img_wrapper">
<div class="o_viewer_zoomer">
<div class="o_loading_img text-center" t-if="widget.activeAttachment.type == 'image'">
<i aria-hidden="true" class="fa fa-circle-o-notch fa-spin text-gray-light fa-3x fa-fw"/>
</div>
<img class="o_viewer_img" t-attf-src="/web/image/#{widget.activeAttachment.id}?unique=1" t-if="widget.activeAttachment.type == 'image'"/>
<iframe class="mt32 o_viewer_pdf" t-attf-src="/web/static/lib/pdfjs/web/viewer.html?file=/web/content/#{widget.activeAttachment.id}" t-if="widget.activeAttachment.type == 'application/pdf'"/>
<video class="o_viewer_video" controls="controls" t-if="widget.activeAttachment.type == 'video'">
<source t-att-data-type="widget.activeAttachment.mimetype" t-attf-src="/web/image/#{widget.activeAttachment.id}"/>
</video>
</div>
</div>
<div class="o_viewer_toolbar btn-toolbar" role="toolbar" t-if="widget.activeAttachment.type == 'image'">
<div class="btn-group ml0" role="group">
<a class="o_viewer_toolbar_btn btn o_zoom_in" data-toggle="tooltip" href="#" title="Zoom In">
<i class="fa fa-fw fa-plus"/>
</a>
<a class="o_viewer_toolbar_btn btn o_zoom_reset disabled" data-toggle="tooltip" href="#" title="Reset Zoom">
<i class="fa fa-fw fa-search"/>
</a>
<a class="o_viewer_toolbar_btn btn o_zoom_out disabled" data-toggle="tooltip" href="#" title="Zoom Out">
<i class="fa fa-fw fa-minus"/>
</a>
</div>
<div class="btn-group ml8" role="group">
<a class="o_viewer_toolbar_btn btn o_rotate" data-toggle="tooltip" href="#" title="Rotate">
<i class="fa fa-fw fa-repeat"/>
</a>
</div>
<div class="btn-group ml8" role="group">
<a class="o_viewer_toolbar_btn btn o_print_btn" data-toggle="tooltip" href="#" title="Print">
<i class="fa fa-fw fa-print"/>
</a>
<a class="o_viewer_toolbar_btn btn o_download_btn" data-toggle="tooltip" href="#" title="Download">
<i class="fa fa-fw fa-download"/>
</a>
</div>
</div>
</div>
</t>
<t t-name="DocumentViewer">
<div aria-hidden="true" class="modal o_modal_fullscreen" data-keyboard="false" role="dialog" tabindex="-1">
<t t-call="DocumentViewer.Content"/>
<t t-if="widget.attachment.length != 1">
<a class="arrow arrow-left move_previous" href="#">
<span class="fa fa-chevron-left"/>
</a>
<a class="arrow arrow-right move_next" href="#">
<span class="fa fa-chevron-right"/>
</a>
</t>
</div>
</t>
<t t-name="PrintImage">
<html>
<head>
<script>
function onload_img() { setTimeout('print_img()', 10); } function print_img() { window.print(); window.close(); }
</script>
</head>
<body onload="onload_img()">
<img t-att-src="src"/>
</body>
</html>
</t>
<div class="o_mail_no_content" t-name="mail.EmptyChannel">
<t t-if="options.channel_id==='channel_inbox'">
<div class="o_thread_title">Congratulations, your inbox is empty</div>
<div>New messages appear here.</div>
</t>
<t t-if="options.channel_id==='channel_starred'">
<div class="o_thread_title">No starred message</div>
<div>
You can mark any message as 'starred', and it shows up in this channel.
</div>
</t>
</div>
<t t-name="mail.ChatThread.Content">
<t t-call="mail.MessagesSeparator" t-if="options.messages_separator_position == 'top'"/>
<t t-set="current_day" t-value="0"/>
<t t-as="message" t-foreach="messages">
<div class="o_thread_date_separator" t-if="current_day != message.day">
<span class="o_thread_date">
<t t-esc="message.day"/>
</span>
<t t-set="current_day" t-value="message.day"/>
</div>
<t t-call="mail.ChatThread.Message"/>
</t>
</t>
<t t-name="mail.ChatThread.Message">
<div t-att-class="'o_thread_message' + (message.expanded ? ' o_message_expanded ' : ' ') + (message.is_selected ? 'o_thread_selected_message' : '') + (message.is_discussion or message.is_notification ? ' o_mail_discussion' : ' o_mail_not_discussion')" t-att-data-message-id="message.id">
<div class="o_thread_message_sidebar" t-if="options.display_avatar">
<t t-if="!message.mailto and message.author_id[0]">
<img data-oe-model="res.partner" t-att-data-oe-id="message.author_redirect ? message.author_id[0] : ''" t-att-src="message.avatar_src" t-attf-class="o_thread_message_avatar img-circle #{message.author_redirect ? 'o_mail_redirect' : ''}" t-if="message.avatar_src and message.display_author"/>
</t>
<t t-if="message.mailto || !message.author_id[0]">
<img class="o_thread_message_avatar img-circle" t-att-src="message.avatar_src" t-if="message.avatar_src and message.display_author"/>
</t>
<span class="o_thread_message_side_date" t-att-title="message.date.format(date_format)" t-if="!message.display_author">
<t t-esc="message.date.format('hh:mm')"/>
</span>
<i t-att-class="'fa o_thread_message_star o_thread_icon ' + (message.is_starred ? 'fa-star' : 'fa-star-o')" t-att-data-message-id="message.id" t-if="!message.display_author and options.display_stars and message.message_type != 'notification'" title="Mark as Todo"/>
</div>
<div class="o_thread_message_core">
<p class="o_mail_info" t-if="message.display_author">
<t t-if="message.is_note"> Note by </t>
<strong t-if="message.mailto">
<a class="o_mail_mailto" t-attf-href="mailto:#{message.mailto}?subject=Re: #{message.subject}">
<t t-esc="message.mailto"/>
</a>
</strong>
<strong data-oe-model="res.partner" t-att-data-oe-id="message.author_redirect ? message.author_id[0] : ''" t-attf-class="o_thread_author #{message.author_redirect ? 'o_mail_redirect' : ''}" t-if="!message.mailto and message.author_id[0]">
<t t-esc="message.displayed_author"/>
</strong>
<strong class="o_thread_author" t-if="!message.mailto and !message.author_id[0]">
<t t-esc="message.displayed_author"/>
</strong>
-
<small class="o_mail_timestamp" t-att-title="message.date.format(date_format)">
<t t-esc="message.hour"/>
</small>
<t t-if="message.model and (message.model != 'mail.channel') and options.display_document_link">
on
<a class="o_document_link" t-att-data-oe-id="message.res_id" t-att-data-oe-model="message.model" t-att-href="message.url">
<t t-esc="message.record_name"/>
</a>
</t>
<t t-if="message.origin_id and (message.origin_id !== options.channel_id)">
(from
<a href="#" t-att-data-oe-id="message.origin_id">
#
<t t-esc="message.origin_name"/>
</a>
)
</t>
<span class="o_thread_tooltip_container" t-if="options.display_email_icon and message.customer_email_data and message.customer_email_data.length">
<i t-att-class="'o_thread_tooltip o_thread_message_email o_thread_message_email_' + message.customer_email_status + ' fa fa-envelope-o'"/>
<span class="o_thread_tooltip_content">
<t t-as="customer" t-foreach="message.customer_email_data">
<span>
<t t-if="customer[2] == 'sent'">
<i class="fa fa-check"/>
</t>
<t t-if="customer[2] == 'bounce'">
<i class="fa fa-exclamation"/>
</t>
<t t-if="customer[2] == 'exception'">
<i class="fa fa-exclamation"/>
</t>
<t t-if="customer[2] == 'ready'">
<i class="fa fa-send-o"/>
</t>
<t t-esc="customer[1]"/>
</span>
<br/>
</t>
</span>
</span>
<span t-attf-class="o_thread_icons">
<i t-att-class="'fa fa-lg o_thread_icon o_thread_message_star ' + (message.is_starred ? 'fa-star' : 'fa-star-o')" t-att-data-message-id="message.id" t-if="options.display_stars && !message.is_system_notification" title="Mark as Todo"/>
<i class="fa fa-reply o_thread_icon o_thread_message_reply" t-att-data-message-id="message.id" t-if="message.record_name && message.model != 'mail.channel' && options.display_reply_icon" title="Reply"/>
<i class="fa fa-check o_thread_icon o_thread_message_needaction" t-att-data-message-id="message.id" t-if="message.is_needaction && options.display_needactions" title="Mark as Read"/>
</span>
</p>
<div class="o_thread_message_content">
<t t-if="message.tracking_value_ids and message.tracking_value_ids.length > 0">
<t t-if="message.subtype_description">
<p>
<t t-esc="message.subtype_description"/>
</p>
</t>
<t t-call="mail.ChatThread.MessageTracking"/>
</t>
<p class="o_mail_subject" t-if="options.display_subject and message.display_subject">
Subject:
<t t-esc="message.subject"/>
</p>
<t t-if="!(message.tracking_value_ids and message.tracking_value_ids.length > 0)">
<t t-raw="message.body"/>
</t>
<t t-if="message.attachment_ids.length > 0">
<div class="o_attachments_previews" t-if="message.images.length > 0">
<t t-as="attachment" t-foreach="message.images">
<t t-call="mail.AttachmentPreview"/>
</t>
</div>
<div class="o_attachments_list" t-if="message.others.length > 0">
<t t-as="attachment" t-foreach="message.others">
<t t-call="mail.Attachment"/>
</t>
</div>
</t>
</div>
</div>
</div>
<t t-if="options.messages_separator_position == message.id">
<t t-call="mail.MessagesSeparator"/>
</t>
</t>
<t t-name="mail.MessagesSeparator">
<div class="o_thread_new_messages_separator">
<span class="o_thread_separator_label">New messages</span>
</div>
</t>
<t t-name="mail.ChatThread.MessageTracking">
<ul class="o_mail_thread_message_tracking">
<t t-as="value" t-foreach="message.tracking_value_ids">
<li>
<t t-esc="value.changed_field"/>
:
<t t-if="value.old_value">
<span>
<t t-esc="value.old_value || ((value.field_type !== 'boolean') and '')"/>
</span>
<span class="fa fa-long-arrow-right" t-if="value.old_value != value.new_value"/>
</t>
<span t-if="value.old_value != value.new_value">
<t t-esc="value.new_value || ((value.field_type !== 'boolean') and '')"/>
</span>
</li>
</t>
</ul>
</t>
<t t-name="mail.ChatComposer.Attachments">
<div class="o_attachments o_attachments_list" t-if="attachments.length > 0">
<t t-as="attachment" t-foreach="attachments">
<t t-call="mail.Attachment">
<t t-set="editable" t-value="true"/>
</t>
</t>
</div>
</t>
<t t-name="mail.AttachmentPreview">
<div class="o_attachment" t-att-title="attachment.name">
<div class="o_attachment_wrap">
<div class="o_image_box">
<div class="o_attachment_image" t-attf-style="background-image:url('/web/image/#{attachment.id}/160x160/?crop=true')"/>
<div t-att-data-id="attachment.id" t-attf-class="o_image_overlay o_attachment_view">
<span class="o_attachment_title text-white">
<t t-esc="attachment.name"/>
</span>
<a class="o_attachment_download" t-att-href="attachment.url">
<i aria-hidden="true" t-att-title="'Download ' + attachment.name" t-attf-class="fa fa-download text-white"/>
</a>
</div>
</div>
</div>
</div>
</t>
<t t-name="mail.Attachment">
<t t-set="type" t-value="attachment.mimetype and attachment.mimetype.split('/').shift()"/>
<div t-att-title="attachment.name" t-attf-class="o_attachment #{ editable ? 'o_attachment_editable' : '' } #{attachment.upload ? 'o_attachment_uploading' : ''}">
<div class="o_attachment_wrap">
<t t-set="has_preview" t-value="type == 'image' or type == 'video' or attachment.mimetype == 'application/pdf'"/>
<t t-set="ext" t-value="attachment.filename.split('.').pop()"/>
<div t-att-data-id="attachment.id" t-attf-class="o_image_box pull-left #{has_preview ? 'o_attachment_view' : ''}">
<div class="o_image o_hover" t-att-data-mimetype="attachment.mimetype" t-att-style="type == 'image' ? 'background-image:url(/web/image/' + attachment.id + '/38x38/?crop=true' : '' " t-if="has_preview"> </div>
<a t-att-href="attachment.url" t-att-title="'Download ' + attachment.name" t-elif="!editable">
<span class="o_image o_hover" t-att-data-ext="ext" t-att-data-mimetype="attachment.mimetype"/>
</a>
<span class="o_image" t-att-data-ext="ext" t-att-data-mimetype="attachment.mimetype" t-else=""/>
</div>
<div class="caption">
<span t-att-data-id="attachment.id" t-attf-class="ml4 #{has_preview? 'o_attachment_view' : ''}" t-if="has_preview or editable">
<t t-esc="attachment.name"/>
</span>
<a class="ml4" t-att-href="attachment.url" t-att-title="'Download ' + attachment.name" t-else="">
<t t-esc="attachment.name"/>
</a>
</div>
<div class="caption small" t-if="editable">
<b t-att-data-id="attachment.id" t-attf-class="ml4 small text-uppercase #{has_preview? 'o_attachment_view' : ''}">
<t t-esc="ext"/>
</b>
<div class="progress o_attachment_progress_bar">
<div class="progress-bar progress-bar-striped active" style="width: 100%">Uploading</div>
</div>
</div>
<div class="caption small" t-if="!editable">
<b class="ml4 small text-uppercase o_attachment_view" t-att-data-id="attachment.id" t-if="has_preview">
<t t-esc="ext"/>
</b>
<a class="ml4 small text-uppercase" t-att-href="attachment.url" t-att-title="'Download ' + attachment.name" t-else="">
<b>
<t t-esc="ext"/>
</b>
</a>
<a class="ml4 o_attachment_download pull-right" t-att-href="attachment.url" t-att-title="'Download ' + attachment.name">
<i t-attf-class="fa fa-download"/>
</a>
</div>
<div class="o_attachment_uploaded" t-if="editable">
<i class="text-success fa fa-check"/>
</div>
<div class="o_attachment_delete" t-att-data-id="attachment.id" t-if="editable">
<span class="text-white">×</span>
</div>
</div>
</div>
</t>
<t t-name="mail.ChatThread.LoadMore">
<div class="o_thread_show_more">
<t t-if="options.loadMoreOnScroll">
<span>
<i class="fa fa-spinner fa-spin"/>
Loading older messages...
</span>
</t>
<t t-else="">
<button class="btn btn-sm btn-link">-------- Show older messages --------</button>
</t>
</div>
</t>
<t t-name="mail.ChatWindow">
<div class="o_chat_window o_in_home_menu">
<div class="o_chat_header">
<t t-call="mail.ChatWindowHeaderContent">
<t t-set="status" t-value="widget.status"/>
<t t-set="title" t-value="widget.title"/>
<t t-set="unread_counter" t-value="widget.unread_msgs"/>
</t>
</div>
<div class="o_chat_content"> </div>
<div class="o_chat_composer o_chat_mini_composer" t-if="!widget.options.input_less">
<input class="o_composer_text_field" t-att-placeholder="widget.options.placeholder"/>
</div>
</div>
</t>
<t t-name="mail.ChatWindowsDropdown">
<div t-attf-class="o_chat_window o_in_home_menu o_chat_window_dropdown dropup #{open ? 'open' : ''}">
<span class="o_chat_window_dropdown_toggler dropdown-toggle" data-toggle="dropdown">
<i class="fa fa-comments-o"/>
<t t-esc="sessions.length"/>
<span class="o_total_unread_counter">
<t t-if="unread_counter">
<t t-esc="unread_counter"/>
</t>
</span>
</span>
<ul class="dropdown-menu">
<t t-as="session" t-foreach="sessions">
<li class="o_chat_header" t-att-data-session-id="session.id">
<t t-call="mail.ChatWindowHeaderContent">
<t t-set="status" t-value="session.window.status"/>
<t t-set="title" t-value="session.window.title"/>
<t t-set="unread_counter" t-value="session.window.unread_msgs"/>
</t>
</li>
</t>
</ul>
</div>
</t>
<t t-name="mail.ChatWindowHeaderContent">
<span t-if="widget.isMobile">
<a class="o_chat_window_close fa fa-1x fa-arrow-left mr4" href="#"/>
</span>
<span class="o_chat_title">
<t t-call="mail.chat.UserStatus" t-if="status"/>
<t t-esc="title"/>
<span t-if="unread_counter">
(
<t t-esc="unread_counter"/>
)
</span>
</span>
<span class="o_chat_window_buttons" t-if="!widget.isMobile">
<a class="o_chat_window_close fa fa-close" href="#"/>
</span>
</t>
<t t-extend="mail.ChatWindow" t-name="mail.ExtendedChatWindow">
<t t-jquery=".o_chat_header" t-operation="after">
<div class="o_chat_search_input" t-if="widget.options.thread_less">
<span> To: </span>
<input placeholder="User name" type="text"/>
</div>
</t>
</t>
<t t-extend="mail.ChatWindowHeaderContent">
<t t-jquery=".o_chat_window_buttons" t-operation="prepend">
<a class="o_chat_window_expand fa fa-expand" href="#" title="Open in Discuss"/>
</t>
</t>
<t t-name="WebClient.announcement_bar">
<div class="openerp" id="announcement_bar_table">
<table class="oe_webclient">
<tr>
<td class="announcement_bar" colspan="2">
<span class="message"/>
<span class="url">
<a href="https://services.openerp.com/openerp-enterprise/ab/register" target="_blank"/>
</span>
<span class="close"/>
</td>
</tr>
</table>
</div>
</t>
<t t-name="mail.KanbanActivity">
<div class="o_kanban_inline_block dropdown o_kanban_selection o_mail_activity">
<a class="dropdown-toggle o_activity_btn" data-toggle="dropdown">
<span class="fa fa-clock-o fa-lg fa-fw"/>
</a>
<ul class="dropdown-menu o_activity" role="menu"> </ul>
</div>
</t>
<t t-name="mail.KanbanActivityLoading">
<li class="text-center o_no_activity">
<span class="fa fa-spinner fa-spin fa-2x"/>
</li>
</t>
<t t-name="mail.KanbanActivityDropdown">
<li class="text-center o_no_activity" t-if="_.isEmpty(records)">
<span>No activities planned.</span>
</li>
<li t-if="!_.isEmpty(records)">
<ul class="nav o_activity_log">
<t t-as="key" t-foreach="_.keys(records)">
<t t-set="logs" t-value="records[key]"/>
<li class="o_activity_label">
<strong t-attf-class="o_activity_color_#{key}">
<t t-esc="selection[key]"/>
(
<t t-esc="logs.length"/>
)
</strong>
</li>
<li class="o_schedule_activity" t-as="log" t-att-data-activity-id="log.id" t-foreach="logs">
<div class="o_activity_title pull-left">
<span t-attf-class="fa #{log.icon} fa-fw"/>
<strong>
<t t-esc="log.title_action or log.activity_type_id[1]"/>
</strong>
<div>
<span class="fa fa-clock-o fa-fw"/>
<span t-att-title="log.date_deadline">
<t t-esc="log.label_delay"/>
</span>
<t t-if="log.user_id[0] != uid">
<span class="ml4 fa fa-user"/>
<span>
<t t-esc="log.user_id[1]"/>
</span>
</t>
</div>
</div>
<div class="pull-right">
<span class="o_mark_as_done o_activity_link o_activity_link_kanban fa fa-check-circle fa-2x mt4" t-att-data-activity-id="log.id" title="Mark as done"/>
</div>
</li>
</t>
</ul>
</li>
<li class="o_schedule_activity text-center">
<span class="btn btn-link btn-block">
<i aria-hidden="true" class="fa fa-plus fa-fw"/>
<strong>Schedule an activity</strong>
</span>
</li>
</t>
<t t-extend="FieldMany2ManyTag" t-name="Many2ManyAttendeeTag">
<t t-jquery="span:first" t-operation="prepend">
<span t-attf-class="o_calendar_invitation #{attendeesData[el_index].status}" t-if="attendeesData[el_index]"/>
</t>
</t>
<t t-extend="Notification" t-name="CalendarNotification">
<t t-jquery=".o_notification_title > t" t-operation="replace">
<span t-attf-class="link2event eid_{{widget.eid}}">
<t t-esc="widget.title"/>
</span>
</t>
<t t-jquery=".o_notification_content" t-operation="append">
<br/>
<br/>
<button class="btn btn-sm btn-primary link2showed oe_highlight oe_form oe_button" type="button">
<span>OK</span>
</button>
<button class="btn btn-sm btn-link link2event" type="button">Details</button>
<button class="btn btn-sm btn-link link2recall" type="button">Snooze</button>
</t>
</t>
<div t-name="web_editor.TranslatorInfoDialog">
<p>You are about to enter the translation mode.</p>
<p>
Here are the visuals used to help you translate efficiently:
</p>
<ul class="oe_translate_examples">
<li data-oe-translation-state="to_translate">Content to translate</li>
<li data-oe-translation-state="translated">Translated content</li>
</ul>
<p>
In this mode, you can only translate texts. To change the structure of the page, you must edit the master page. Each modification on the master page is automatically applied to all translated versions.
</p>
</div>
<t t-name="web_editor.FieldTextHtml">
<div class="oe_form_field oe_form_field_html oe_form_embedded_html" t-att-style="widget.attrs.style">
<iframe/>
</div>
</t>
<t t-name="web_editor.FieldTextHtml.button.translate">
<div class="btn-group pull-right">
<button class="o_field_translate btn btn-default btn-sm btn-small" style="height: 24px; padding: 1px 17px 0px 5px" t-if="widget.field.translate">
<span class="fa fa-language fa-lg oe_input_icon"/>
</button>
</div>
</t>
<t t-name="web_editor.FieldTextHtml.fullscreen">
<span style="margin: 5px; position: fixed; top: 0; right: 0; z-index: 2000;">
<button class="o_fullscreen btn btn-primary" style="width: 24px; height: 24px; background-color: #337ab7; border: 1px solid #2e6da4; border-radius: 4px; padding: 0; position: relative;">
<img src="/web_editor/font_to_img/61541/rgb(255,255,255)/16" style="position: absolute; top: 3px; left: 4px;"/>
</button>
</span>
</t>
<t t-name="web_editor.ace_view_editor">
<div class="o_ace_view_editor">
<div class="form-inline o_ace_view_editor_title">
<div class="btn-group o_ace_type_switcher">
<button class="btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown" type="button">XML (HTML)</button>
<ul class="dropdown-menu" role="menu">
<li>
<a class="o_ace_type_switcher_choice" data-type="xml" href="#">XML (HTML)</a>
</li>
<li>
<a class="o_ace_type_switcher_choice" data-type="less" href="#">LESS (CSS)</a>
</li>
</ul>
</div>
<select class="o_res_list" id="ace-view-list"/>
<select class="o_res_list hidden" id="ace-less-list"/>
<label class="o_include_option oe_include_bundles">
<div class="o_checkbox">
<input class="js_include_bundles" t-att-checked="widget.options.includeBundles ? 'checked' : undefined" type="checkbox"/>
<span/>
</div>
Include Asset Bundles
</label>
<label class="o_include_option o_include_all_less hidden">
<div class="o_checkbox">
<input class="js_include_all_less" t-att-checked="widget.options.includeAllLess ? 'checked' : undefined" type="checkbox"/>
<span/>
</div>
Include All LESS Files
</label>
<div class="o_button_section">
<button class="btn btn-sm btn-primary" data-action="save" type="submit">Save</button>
<button class="btn btn-sm btn-default" data-action="close" type="button">Close</button>
</div>
</div>
<div id="ace-view-id">
<span/>
<div class="pull-right">
<button class="btn btn-xs btn-danger" data-action="reset" type="button">
<i class="fa fa-undo"/>
Reset
</button>
<button class="btn btn-xs btn-link" data-action="format" type="button">Format</button>
</div>
</div>
<div id="ace-view-editor"/>
</div>
</t>
<t t-name="web_editor.snippet_overlay">
<div class="oe_overlay">
<div class="o_handles">
<div class="o_handle n readonly"/>
<div class="o_handle e readonly"/>
<div class="o_handle w readonly"/>
<div class="o_handle s readonly"/>
</div>
<div class="oe_overlay_options" contentEditable="false">
<div class="btn-group">
<a class="btn btn-default btn-sm oe_snippet_parent" href="#" title="Select Parent Container">
<i class="fa fa-lg fa-level-up"/>
</a>
<div class="dropdown oe_options hidden btn-group">
<a class="btn btn-primary btn-sm" data-toggle="dropdown" href="#" title="Customize">Customize</a>
<ul class="dropdown-menu" role="menu"/>
</div>
<a class="btn btn-default btn-sm oe_snippet_move" href="#" title="Drag to Move">
<i class="fa fa-arrows ml4 mr4"/>
</a>
<a class="btn btn-default btn-sm oe_snippet_clone" href="#" title="Duplicate Container">
<i class="fa fa-files-o ml4 mr4"/>
</a>
<a class="btn btn-default btn-sm oe_snippet_remove" href="#" title="Remove Block">
<i class="fa fa-trash-o ml4 mr4"/>
</a>
</div>
</div>
</div>
</t>
<div class="colorpicker" t-name="web_editor.snippet.option.colorpicker">
<div class="note-palette-title">Background Color</div>
<div class="btn-group palette-reset">
<div class="note-color-reset" data-event="foreColor" data-value="inherit" title="None">
<i class="fa fa-ban"/>
</div>
</div>
<div class="o_colorpicker_sections">
<ul class="nav nav-pills o_colorpicker_section_menu"/>
<div class="tab-content o_colorpicker_section_tabs"/>
</div>
</div>
<t t-name="web_editor.many2one.button">
<div class="btn-group">
<a class="btn btn-default btn-sm dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" href="#" title="Search Contact">
<i class="fa fa-search"/>
</a>
<ul class="dropdown-menu contact_menu" role="menu">
<li>
<a>
<input href="#" placeholder="Search" type="email"/>
</a>
</li>
</ul>
</div>
</t>
<t t-name="web_editor.many2one.search">
<t t-as="item" t-foreach="contacts">
<li>
<a href="#" t-att-data-id="item.id" t-att-data-name="item.display_name">
<t t-esc="item.display_name"/>
<t t-if="item.city or item.country_id">
<small class="text-muted">
(
<t t-esc="item.city"/>
<t t-esc="item.country_id and item.country_id[1]"/>
)
</small>
</t>
</a>
</li>
</t>
</t>
<t t-name="web_editor.editorbar">
<div id="web_editor-top-edit">
<div id="web_editor-toolbars"/>
<form class="navbar-form text-muted">
<button class="btn btn-sm btn-default" data-action="cancel" type="button">
<i class="fa fa-times"/>
Discard
</button>
<button class="btn btn-sm btn-primary" data-action="save" type="button">
<i class="fa fa-floppy-o"/>
Save
</button>
</form>
</div>
</t>
<t t-name="web_editor.components.switch">
<label class="o_switch" t-att-for="id">
<input t-att-id="id" type="checkbox"/>
<span/>
<t t-if="label">
<t t-esc="label"/>
</t>
</label>
</t>
<form action="#" class="form-horizontal" t-name="web_editor.dialog.alt">
<div class="form-group">
<label class="col-sm-3 control-label" for="alt">Description (alt tag)</label>
<div class="col-sm-8">
<input class="form-control" id="alt" required="required" t-att-value="widget.alt" type="text"/>
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label" for="title">Tooltip</label>
<div class="col-sm-8">
<input class="form-control" id="title" required="required" t-att-value="widget.title" type="text"/>
</div>
</div>
</form>
<div t-name="web_editor.dialog.media">
<ul class="nav nav-tabs">
<li class="active">
<a data-toggle="tab" href="#editor-media-image" t-att-class="widget.noImages ? 'hidden' : ''">Image</a>
</li>
<li>
<a data-toggle="tab" href="#editor-media-document" t-att-class="widget.noDocuments ? 'hidden' : ''">Document</a>
</li>
<li>
<a data-toggle="tab" href="#editor-media-icon" t-att-class="widget.noIcons ? 'hidden' : ''">Pictogram</a>
</li>
<li>
<a data-toggle="tab" href="#editor-media-video" t-att-class="widget.noVideos ? 'hidden' : ''">Video</a>
</li>
<li class="search pull-right">
<ul class="pager mb0 mt0">
<li class="previous">
<a class="btn btn-default disabled" href="#">
<i class="fa fa-angle-left"/>
Previous
</a>
</li>
<li class="next">
<a class="btn btn-default disabled" href="#">
Next
<i class="fa fa-angle-right"/>
</a>
</li>
</ul>
</li>
<li class="search pull-right">
<div class="form-group">
<input class="form-control" id="icon-search" type="search"/>
<span class="fa fa-search"/>
</div>
</li>
</ul>
<div class="tab-content">
<div class="tab-pane fade in active" id="editor-media-image"/>
<div class="tab-pane fade" id="editor-media-document"/>
<div class="tab-pane fade" id="editor-media-icon"/>
<div class="tab-pane fade" id="editor-media-video"/>
</div>
</div>
<t t-name="web_editor.dialog.image">
<form action="/web_editor/attachment/add" class="form-inline" enctype="multipart/form-data" method="POST" target="fileframe">
<input name="csrf_token" t-att-value="csrf_token" type="hidden"/>
<input name="filters" t-att-value="widget.firstFilters.join('_')" type="hidden"/>
<input name="res_id" t-att-value="widget.options.res_id" t-if="widget.options.res_id" type="hidden"/>
<input name="res_model" t-att-value="widget.options.res_model" t-if="widget.options.res_model" type="hidden"/>
<div class="well">
<div class="form-group pull-left">
<input class="hidden" multiple="multiple" name="upload" t-att-accept="widget.accept" type="file"/>
<input name="disable_optimization" type="hidden" value=""/>
<div class="btn-group">
<button class="btn btn-primary o_upload_image_button" type="button">Upload an image</button>
<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button">
<span class="caret"/>
<span class="sr-only">Alternate Upload</span>
</button>
<ul class="dropdown-menu" role="menu">
<li>
<a class="o_upload_image_button_no_optimization">Upload image without optimization</a>
</li>
</ul>
</div>
</div>
<div>
<span class="text-muted">— or —</span>
<label for="imageurl">Add an image URL</label>
<div class="form-group btn-group">
<input class="form-control url pull-left" id="imageurl" name="url" placeholder="https://www.odoo.com/logo.png" style="width: 320px;" type="text"/>
<button class="btn btn-default o_upload_image_url_button" disabled="disabled" type="button">Add</button>
</div>
</div>
</div>
<div class="help-block"/>
<div class="existing-attachments">
<t t-call="web_editor.dialog.image.existing"/>
</div>
<iframe class="hidden" name="fileframe"/>
</form>
</t>
<t t-name="web_editor.dialog.image.existing">
<div aria-hidden="true" class="modal" role="dialog" tabindex="-1">
<div class="modal-dialog select-image">
<div class="modal-content">
<div class="modal-header">
<button aria-hidden="true" class="close" data-dismiss="modal" type="button">×</button>
<h3 class="modal-title">Select a Picture</h3>
</div>
<div class="modal-body has-error">
<div class="existing-attachments"/>
<div class="help-block"/>
</div>
<div class="modal-footer">
<a aria-hidden="true" data-dismiss="modal" href="#">Discard</a>
</div>
</div>
</div>
</div>
</t>
<t t-name="web_editor.dialog.image.existing.content">
<div class="existing-attachments">
<div class="row mt16" t-as="row" t-foreach="rows">
<div class="col-sm-2 o_existing_attachment_cell" t-as="attachment" t-foreach="row">
<i class="fa fa-times o_existing_attachment_remove" t-att-data-id="attachment.id" t-if="attachment.res_model === 'ir.ui.view'" title="This file is a public view attachment"/>
<i class="fa fa-times o_existing_attachment_remove" t-att-data-id="attachment.id" t-else="" title="This file is attached to the current record"/>
<div class="o_attachment_border" t-att-style="attachment.res_model === 'ir.ui.view' ? null : 'border: 1px solid #5cb85c;'">
<div class="o_image o_image_loading" t-att-alt="attachment.name" t-att-data-id="attachment.id" t-att-data-mimetype="attachment.mimetype" t-att-data-src="attachment.src" t-att-data-url="attachment.url" t-att-title="attachment.name"/>
</div>
</div>
</div>
</div>
</t>
<t t-name="web_editor.dialog.image.existing.error">
<div class="help-block">
<p>
The image could not be deleted because it is used in the following pages or views:
</p>
<ul t-as="view" t-foreach="views">
<li>
<a t-attf-href="/web#model=ir.ui.view&id=#{view.id}">
<t t-esc="view.name"/>
</a>
</li>
</ul>
</div>
</t>
<t t-name="web_editor.dialog.font-icons">
<form action="#">
<div class="font-icons-icons">
<t t-call="web_editor.dialog.font-icons.icons">
<t t-set="iconsParser" t-value="widget.iconsParser"/>
</t>
</div>
</form>
</t>
<t t-name="web_editor.dialog.font-icons.icons">
<t t-as="data" t-foreach="iconsParser">
<span t-as="cssData" t-att-data-alias="cssData.names.join(',')" t-att-data-id="cssData.names[0]" t-att-title="cssData.names[0]" t-attf-class="font-icons-icon #{data.base} #{cssData.names[0]}" t-foreach="data.cssData"/>
</t>
</t>
<t t-name="web_editor.dialog.video">
<form action="#" class="form-inline well">
<div class="o_video_dialog_form">
<div class="form-group" id="o_video_form_group">
<label class="mt8" for="o_video_text">
Video code
<small class="text-muted">(URL or Embed)</small>
</label>
<textarea class="form-control url" id="o_video_text" placeholder="Copy-paste your URL or embed code here"/>
<label class="control-label o_validate_feedback" for="o_video_text">
<i class="fa fa-check"/>
<i class="fa fa-exclamation-triangle"/>
</label>
</div>
<div class="text-right">
<small class="text-muted">
Accepts
<b>
<i>Youtube</i>
</b>
,
<b>
<i>Instagram</i>
</b>
,
<b>
<i>Vine.co</i>
</b>
,
<b>
<i>Vimeo</i>
</b>
,
<b>
<i>Dailymotion</i>
</b>
and
<b>
<i>Youku</i>
</b>
videos
</small>
</div>
<div class="o_video_dialog_options hidden mt48">
<small class="text-muted">Options</small>
<ul class="list-group">
<li class="list-group-item o_yt_option o_vim_option o_dm_option">
<label class="o_switch mb0">
<input id="o_video_autoplay" type="checkbox"/>
<span/>
Autoplay
</label>
</li>
<li class="list-group-item o_yt_option o_vim_option">
<label class="o_switch mb0">
<input id="o_video_loop" type="checkbox"/>
<span/>
Loop
</label>
</li>
<li class="list-group-item o_yt_option o_dm_option">
<label class="o_switch mb0">
<input id="o_video_hide_controls" type="checkbox"/>
<span/>
Hide player controls
</label>
</li>
<li class="list-group-item o_yt_option">
<label class="o_switch mb0">
<input id="o_video_hide_fullscreen" type="checkbox"/>
<span/>
Hide fullscreen button
</label>
</li>
<li class="list-group-item o_yt_option">
<label class="o_switch mb0">
<input id="o_video_hide_yt_logo" type="checkbox"/>
<span/>
Hide Youtube logo
</label>
</li>
<li class="list-group-item o_dm_option">
<label class="o_switch mb0">
<input id="o_video_hide_dm_logo" type="checkbox"/>
<span/>
Hide Dailymotion logo
</label>
</li>
<li class="list-group-item o_dm_option">
<label class="o_switch mb0">
<input id="o_video_hide_dm_share" type="checkbox"/>
<span/>
Hide sharing button
</label>
</li>
</ul>
</div>
</div>
<div id="video-preview">
<div class="o_video_dialog_preview_text small mt16 mb8 hidden">Preview</div>
<div class="media_iframe_video">
<div class="media_iframe_video_size"/>
<iframe allowfullscreen="allowfullscreen" class="o_video_dialog_iframe" frameborder="0" src=""/>
</div>
</div>
</form>
</t>
<div class="o_link_dialog" t-name="web_editor.dialog.link">
<div class="row">
<form class="col-md-8 form-horizontal">
<div t-attf-class="form-group#{widget.needLabel ? '' : ' hidden'}">
<label class="control-label col-sm-3" for="o_link_dialog_label_input">Link Label</label>
<div class="col-sm-9">
<input class="form-control" id="o_link_dialog_label_input" name="label" required="required" t-att-value="widget.data.text" type="text"/>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-3" for="o_link_dialog_url_input">URL or Email</label>
<div class="col-sm-9">
<input class="form-control" id="o_link_dialog_url_input" name="url" required="required" type="text"/>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-3">Size</label>
<div class="col-sm-9">
<select class="form-control col-sm-3 link-style" name="link_style_size">
<option value="xs">Extra Small</option>
<option value="sm">Small</option>
<option selected="selected" value="">Medium</option>
<option value="lg">Large</option>
</select>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-3">Color</label>
<div class="col-sm-9">
<div class="o_link_dialog_color">
<label data-color="" t-attf-class="o_link_dialog_color_item o_btn_preview btn btn-link text-center">
<span>L</span>
<input class="hidden link-style" name="link_style_color" type="radio" value=""/>
<i class="fa"/>
</label>
<t t-as="color" t-foreach="['primary', 'default', 'success', 'info', 'warning', 'danger', 'alpha', 'beta', 'gamma', 'delta', 'epsilon']">
<label t-attf-class="o_link_dialog_color_item o_btn_preview btn btn-#{color}">
<input class="hidden link-style" name="link_style_color" t-att-value="color" type="radio"/>
<i class="fa"/>
</label>
</t>
</div>
</div>
</div>
<div class="form-group">
<div class="col-sm-offset-3 col-sm-9">
<label class="o_switch">
<input name="is_new_window" t-att-checked="widget.data.isNewWindow ? 'checked' : undefined" type="checkbox"/>
<span/>
Open in new window
</label>
</div>
</div>
</form>
<div class="col-md-4 o_link_dialog_preview">
<div class="form-group text-center">
<label>Preview</label>
<div style="overflow: auto; max-width: 100%; max-height: 200px;">
<a href="#" id="link-preview"/>
</div>
</div>
</div>
</div>
</div>
<div class="o_bg_img_opt_modal" t-name="web_editor.dialog.background_position">
<label class="radio-inline">
<input name="o_bg_img_opt" type="radio" value="cover"/>
Cover
</label>
<label class="radio-inline">
<input name="o_bg_img_opt" type="radio" value="contain"/>
Contain
</label>
<label class="radio-inline">
<input name="o_bg_img_opt" type="radio" value="custom"/>
Custom
</label>
<div class="o_bg_img_opt" data-value="cover">
<div class="o_bg_img_opt_cover_edition">
<h6>Assign a focal point that will always be visible</h6>
<div class="o_bg_img_opt_object">
<span class="grid grid-1"/>
<span class="grid grid-2"/>
<span class="grid grid-3"/>
<span class="grid grid-4"/>
<span class="o_focus_point"/>
<div class="o_bg_img_opt_ui_info">
X:
<span class="o_x"/>
Y:
<span class="o_y"/>
</div>
</div>
</div>
</div>
<div class="o_bg_img_opt" data-value="contain">
<form class="form-horizontal">
<div class="form-group">
<label class="col-sm-2 control-label" for="repeatInput">Repeat</label>
<div class="col-sm-5">
<div class="checkbox">
<label>
<input id="o_bg_img_opt_contain_repeat" type="checkbox"/>
</label>
</div>
</div>
</div>
</form>
</div>
<form class="o_bg_img_opt form-horizontal" data-value="custom">
<fieldset>
<legend>Background size</legend>
<p>
Sets the width and height of the background image in percent of the parent element.
</p>
<div class="form-group">
<label class="col-sm-3 control-label" for="o_bg_img_opt_custom_size_x">Background width</label>
<div class="col-sm-5">
<div class="input-group">
<input class="form-control input-sm" id="o_bg_img_opt_custom_size_x" max="100" min="0" placeholder="auto" type="number"/>
<div class="input-group-addon">%</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label" for="o_bg_img_opt_custom_size_y">Background height</label>
<div class="col-sm-5">
<div class="input-group">
<input class="form-control input-sm" id="o_bg_img_opt_custom_size_y" max="100" min="0" placeholder="auto" type="number"/>
<div class="input-group-addon">%</div>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>Background position</legend>
<p>Set the starting position of the background image.</p>
<div class="form-group">
<label class="col-sm-3 control-label" for="o_bg_img_opt_custom_pos_x">Horizontal</label>
<div class="col-sm-5">
<div class="input-group">
<input class="form-control input-sm" id="o_bg_img_opt_custom_pos_x" max="100" min="0" placeholder="auto" type="number"/>
<div class="input-group-addon">%</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label" for="o_bg_img_opt_custom_pos_y">Vertical</label>
<div class="col-sm-5">
<div class="input-group">
<input class="form-control input-sm" id="o_bg_img_opt_custom_pos_y" max="100" min="0" placeholder="auto" type="number"/>
<div class="input-group-addon">%</div>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>Background repeat</legend>
<p>
Define if/how the background image will be repeated
</p>
<select class="form-control" id="o_bg_img_opt_custom_repeat">
<option value="">No repeat</option>
<option value="o_bg_img_opt_repeat">Repeat both</option>
<option value="o_bg_img_opt_repeat_x">Repeat x</option>
<option value="o_bg_img_opt_repeat_y">Repeat y</option>
</select>
</fieldset>
</form>
</div>
<t t-name="Chrome">
<div class="pos">
<div class="pos-topheader">
<div class="pos-branding">
<img class="pos-logo" src="img/logo.png"/>
<span class="placeholder-UsernameWidget"/>
</div>
<div class="pos-rightheader">
<span class="placeholder-OrderSelectorWidget"/>
</div>
</div>
<div class="pos-content">
<div class="window">
<div class="subwindow">
<div class="subwindow-container">
<div class="subwindow-container-fix screens"> </div>
</div>
</div>
</div>
<div class="placeholder-OnscreenKeyboardWidget"/>
</div>
<div class="popups"> </div>
<div class="loader">
<div class="loader-feedback oe_hidden">
<h1 class="message">Loading</h1>
<div class="progressbar">
<div class="progress" width="50%"/>
</div>
<div class="oe_hidden button skip"> Skip </div>
</div>
</div>
</div>
</t>
<t t-name="SynchNotificationWidget">
<div class="oe_status js_synch">
<span class="js_msg oe_hidden">0</span>
<div class="js_connected oe_icon oe_green">
<i class="fa fa-fw fa-wifi"/>
</div>
<div class="js_connecting oe_icon oe_hidden">
<i class="fa fa-fw fa-spin fa-spinner"/>
</div>
<div class="js_disconnected oe_icon oe_red oe_hidden">
<i class="fa fa-fw fa-wifi"/>
</div>
<div class="js_error oe_icon oe_red oe_hidden">
<i class="fa fa-fw fa-warning"/>
</div>
</div>
</t>
<t t-name="ProxyStatusWidget">
<div class="oe_status js_proxy">
<span class="js_msg oe_orange oe_hidden"/>
<div class="js_connected oe_icon oe_green">
<i class="fa fa-fw fa-sitemap"/>
</div>
<div class="js_connecting oe_icon oe_hidden">
<i class="fa fa-fw fa-spin fa-spinner"/>
</div>
<div class="js_warning oe_icon oe_orange oe_hidden">
<i class="fa fa-fw fa-sitemap"/>
</div>
<div class="js_disconnected oe_icon oe_red oe_hidden">
<i class="fa fa-fw fa-sitemap"/>
</div>
</div>
</t>
<t t-name="SaleDetailsButton">
<div class="oe_status">
<div class="js_connected oe_icon">
<i class="fa fa-fw fa-print"/>
</div>
</div>
</t>
<t t-name="ClientScreenWidget">
<div class="oe_status">
<span class="oe_customer_display_text"/>
<div class="js_warning oe_icon oe_orange oe_hidden">
<i class="fa fa-fw fa-desktop"/>
</div>
<div class="js_disconnected oe_icon oe_red">
<i class="fa fa-fw fa-desktop"/>
</div>
<div class="js_connected oe_icon oe_green oe_hidden">
<i class="fa fa-fw fa-desktop"/>
</div>
</div>
</t>
<t t-name="HeaderButtonWidget">
<div class="header-button">
<t t-esc="widget.label"/>
</div>
</t>
<t t-name="PosCloseWarning">
<div>
There are pending operations that could not be saved into the database, are you sure you want to exit?
</div>
</t>
<t t-name="ActionButtonWidget">
<div class="control-button">
<t t-esc="widget.label"/>
</div>
</t>
<t t-name="SetFiscalPositionButton">
<div class="control-button">
<i class="fa fa-book"/>
<t t-esc="widget.get_current_fiscal_position_name()"/>
</div>
</t>
<t t-name="SetPricelistButton">
<div class="control-button o_pricelist_button">
<i class="fa fa-th-list"/>
<t t-esc="widget.get_current_pricelist_name()"/>
</div>
</t>
<t t-name="ActionpadWidget">
<div class="actionpad">
<button t-attf-class="button set-customer #{ ( widget.pos.get_client() and widget.pos.get_client().name.length > 10) ? "decentered" : "" }">
<i class="fa fa-user"/>
<t t-if="widget.pos.get_client()">
<t t-esc="widget.pos.get_client().name"/>
</t>
<t t-if="!widget.pos.get_client()"> Customer </t>
</button>
<button class="button pay">
<div class="pay-circle">
<i class="fa fa-chevron-right"/>
</div>
Payment
</button>
</div>
</t>
<t t-name="NumpadWidget">
<div class="numpad">
<button class="input-button number-char">1</button>
<button class="input-button number-char">2</button>
<button class="input-button number-char">3</button>
<button class="mode-button" data-mode="quantity">Qty</button>
<br/>
<button class="input-button number-char">4</button>
<button class="input-button number-char">5</button>
<button class="input-button number-char">6</button>
<button class="mode-button" data-mode="discount">Disc</button>
<br/>
<button class="input-button number-char">7</button>
<button class="input-button number-char">8</button>
<button class="input-button number-char">9</button>
<button class="mode-button" data-mode="price">Price</button>
<br/>
<button class="input-button numpad-minus">+/-</button>
<button class="input-button number-char">0</button>
<button class="input-button number-char">.</button>
<button class="input-button numpad-backspace">
<img height="21" src="img/backspace.png" style="pointer-events: none;" width="24"/>
</button>
</div>
</t>
<t t-name="CategoryButton">
<span class="category-button js-category-switch" t-att-data-category-id="category.id">
<div class="category-img">
<img t-att-src="image_url"/>
</div>
<div class="category-name">
<t t-esc="category.name"/>
</div>
</span>
</t>
<t t-name="CategorySimpleButton">
<span class="category-simple-button js-category-switch" t-att-data-category-id="category.id">
<t t-esc="category.name"/>
</span>
</t>
<t t-name="ProductCategoriesWidget">
<div>
<header class="rightpane-header">
<div class="breadcrumbs">
<span class="breadcrumb">
<span class=" breadcrumb-button breadcrumb-home js-category-switch">
<i class="fa fa-home"/>
</span>
</span>
<t t-as="category" t-foreach="widget.breadcrumb">
<span class="breadcrumb">
<img class="breadcrumb-arrow" src="img/bc-arrow-big.png"/>
<span class="breadcrumb-button js-category-switch" t-att-data-category-id="category.id">
<t t-esc="category.name"/>
</span>
</span>
</t>
</div>
<div class="searchbox">
<input placeholder="Search Products"/>
<span class="search-clear"/>
</div>
</header>
<t t-if="widget.subcategories.length > 0">
<div class="categories">
<div class="category-list-scroller touch-scrollable">
<div class="category-list"> </div>
</div>
</div>
</t>
</div>
</t>
<t t-name="ProductListWidget">
<div class="product-list-container">
<div class="product-list-scroller touch-scrollable">
<div class="product-list"> </div>
</div>
<span class="placeholder-ScrollbarWidget"/>
</div>
</t>
<t t-name="ProductScreenWidget">
<div class="product-screen screen">
<div class="leftpane">
<div class="window">
<div class="subwindow">
<div class="subwindow-container">
<div class="subwindow-container-fix">
<div class="placeholder-OrderWidget"/>
</div>
</div>
</div>
<div class="subwindow collapsed">
<div class="subwindow-container">
<div class="subwindow-container-fix pads">
<div class="control-buttons oe_hidden"/>
<div class="placeholder-ActionpadWidget"/>
<div class="placeholder-NumpadWidget"/>
</div>
</div>
</div>
</div>
</div>
<div class="rightpane">
<table class="layout-table">
<tr class="header-row">
<td class="header-cell">
<span class="placeholder-ProductCategoriesWidget"/>
</td>
</tr>
<tr class="content-row">
<td class="content-cell">
<div class="content-container">
<span class="placeholder-ProductListWidget"/>
</div>
</td>
</tr>
</table>
</div>
</div>
</t>
<t t-name="ScaleScreenWidget">
<div class="scale-screen screen">
<div class="screen-content">
<div class="top-content">
<span class="button back">
<i class="fa fa-angle-double-left"/>
Back
</span>
<h1 class="product-name">
<t t-esc="widget.get_product_name()"/>
</h1>
</div>
<div class="centered-content">
<div class="weight js-weight">
<t t-esc="widget.get_product_weight_string()"/>
</div>
<div class="product-price">
<t t-esc="widget.format_currency(widget.get_product_price()) + '/' + widget.get_product_uom()"/>
</div>
<div class="computed-price"> 123.14 € </div>
<div class="buy-product">
Order
<i class="fa fa-angle-double-right"/>
</div>
</div>
</div>
</div>
</t>
<t t-name="ClientLine">
<tr class="client-line" t-att-data-id="partner.id">
<td>
<t t-esc="partner.name"/>
</td>
<td>
<t t-esc="partner.address"/>
</td>
<td>
<t t-esc="partner.phone or partner.mobile or """/>
</td>
</tr>
</t>
<t t-name="ClientDetailsEdit">
<section class="client-details edit">
<div class="client-picture">
<t t-if="!partner.id">
<i class="fa fa-camera"/>
</t>
<t t-if="partner.id">
<img t-att-src="widget.partner_icon_url(partner.id)"/>
</t>
<input class="image-uploader" type="file"/>
</div>
<input class="detail client-name" name="name" placeholder="Name" t-att-value="partner.name"/>
<div class="edit-buttons">
<div class="button undo">
<i class="fa fa-undo"/>
</div>
<div class="button save">
<i class="fa fa-floppy-o"/>
</div>
</div>
<div class="client-details-box clearfix">
<div class="client-details-left">
<div class="client-detail">
<span class="label">Street</span>
<input class="detail client-address-street" name="street" placeholder="Street" t-att-value="partner.street || """/>
</div>
<div class="client-detail">
<span class="label">City</span>
<input class="detail client-address-city" name="city" placeholder="City" t-att-value="partner.city || """/>
</div>
<div class="client-detail">
<span class="label">Postcode</span>
<input class="detail client-address-zip" name="zip" placeholder="ZIP" t-att-value="partner.zip || """/>
</div>
<div class="client-detail">
<span class="label">Country</span>
<select class="detail client-address-country needsclick" name="country_id">
<option value="">None</option>
<t t-as="country" t-foreach="widget.pos.countries">
<option t-att-selected="partner.country_id ? ((country.id === partner.country_id[0]) ? true : undefined) : undefined" t-att-value="country.id">
<t t-esc="country.name"/>
</option>
</t>
</select>
</div>
</div>
<div class="client-details-right">
<div class="client-detail">
<span class="label">Email</span>
<input class="detail client-email" name="email" t-att-value="partner.email || """ type="email"/>
</div>
<div class="client-detail">
<span class="label">Phone</span>
<input class="detail client-phone" name="phone" t-att-value="partner.phone || """ type="tel"/>
</div>
<div class="client-detail">
<span class="label">Barcode</span>
<input class="detail barcode" name="barcode" t-att-value="partner.barcode || """/>
</div>
<div class="client-detail">
<span class="label">Tax ID</span>
<input class="detail vat" name="vat" t-att-value="partner.vat || """/>
</div>
<div t-attf-class="client-detail #{widget.pos.pricelists.length <= 1 ? "oe_hidden" : ""}">
<span class="label">Pricelist</span>
<select class="detail needsclick" name="property_product_pricelist">
<t t-as="pricelist" t-foreach="widget.pos.pricelists">
<option t-att-selected="partner.property_product_pricelist ? (pricelist.id === partner.property_product_pricelist[0] ? true : undefined) : undefined" t-att-value="pricelist.id">
<t t-esc="pricelist.display_name"/>
</option>
</t>
</select>
</div>
</div>
</div>
</section>
</t>
<t t-name="ClientDetails">
<section class="client-details">
<div class="client-picture">
<img t-att-src="widget.partner_icon_url(partner.id)"/>
</div>
<div class="client-name">
<t t-esc="partner.name"/>
</div>
<div class="edit-buttons">
<div class="button edit">
<i class="fa fa-pencil-square"/>
</div>
</div>
<div class="client-details-box clearfix">
<div class="client-details-left">
<div class="client-detail">
<span class="label">Address</span>
<t t-if="partner.address">
<span class="detail client-address">
<t t-esc="partner.address"/>
</span>
</t>
<t t-if="!partner.address">
<span class="detail client-address empty">N/A</span>
</t>
</div>
<div class="client-detail">
<span class="label">Email</span>
<t t-if="partner.email">
<span class="detail client-email">
<t t-esc="partner.email"/>
</span>
</t>
<t t-if="!partner.email">
<span class="detail client-email empty">N/A</span>
</t>
</div>
<div class="client-detail">
<span class="label">Phone</span>
<t t-if="partner.phone">
<span class="detail client-phone">
<t t-esc="partner.phone"/>
</span>
</t>
<t t-if="!partner.phone">
<span class="detail client-phone empty">N/A</span>
</t>
</div>
</div>
<div class="client-details-right">
<div class="client-detail">
<span class="label">Barcode</span>
<t t-if="partner.barcode">
<span class="detail client-id">
<t t-esc="partner.barcode"/>
</span>
</t>
<t t-if="!partner.barcode">
<span class="detail client-id empty">N/A</span>
</t>
</div>
<div class="client-detail">
<span class="label">Tax ID</span>
<t t-if="partner.vat">
<span class="detail vat">
<t t-esc="partner.vat"/>
</span>
</t>
<t t-if="!partner.vat">
<span class="detail vat empty">N/A</span>
</t>
</div>
<div t-attf-class="client-detail #{widget.pos.pricelists.length <= 1 ? "oe_hidden" : ""}">
<span class="label">Pricelist</span>
<t t-if="partner.property_product_pricelist">
<span class="detail property_product_pricelist">
<t t-esc="partner.property_product_pricelist[1]"/>
</span>
</t>
<t t-if="!partner.property_product_pricelist">
<span class="detail property_product_pricelist empty">N/A</span>
</t>
</div>
</div>
</div>
</section>
</t>
<t t-name="ClientListScreenWidget">
<div class="clientlist-screen screen">
<div class="screen-content">
<section class="top-content">
<span class="button back">
<i class="fa fa-angle-double-left"/>
Cancel
</span>
<span class="searchbox">
<input placeholder="Search Customers"/>
<span class="search-clear"/>
</span>
<span class="searchbox"/>
<span class="button new-customer">
<i class="fa fa-user"/>
<i class="fa fa-plus"/>
</span>
<span class="button next oe_hidden highlight">
Select Customer
<i class="fa fa-angle-double-right"/>
</span>
</section>
<section class="full-content">
<div class="window">
<section class="subwindow collapsed">
<div class="subwindow-container collapsed">
<div class="subwindow-container-fix client-details-contents"> </div>
</div>
</section>
<section class="subwindow">
<div class="subwindow-container">
<div class="subwindow-container-fix touch-scrollable scrollable-y">
<table class="client-list">
<thead>
<tr>
<th>Name</th>
<th>Address</th>
<th>Phone</th>
</tr>
</thead>
<tbody class="client-list-contents"> </tbody>
</table>
</div>
</div>
</section>
</div>
</section>
</div>
</div>
</t>
<t t-name="PaymentScreen-Paymentlines">
<t t-if="!paymentlines.length">
<div class="paymentlines-empty">
<div class="total">
<t t-esc="widget.format_currency(order.get_total_with_tax())"/>
</div>
<div class="message"> Please select a payment method. </div>
</div>
</t>
<t t-if="paymentlines.length">
<table class="paymentlines">
<colgroup>
<col class="due"/>
<col class="tendered"/>
<col class="change"/>
<col class="method"/>
<col class="controls"/>
</colgroup>
<thead>
<tr class="label">
<th>Due</th>
<th>Tendered</th>
<th>Change</th>
<th>Method</th>
<th/>
</tr>
</thead>
<tbody>
<t t-as="line" t-foreach="paymentlines">
<t t-if="line.selected">
<tr class="paymentline selected">
<td class="col-due">
<t t-esc="widget.format_currency_no_symbol(order.get_due(line))"/>
</td>
<td class="col-tendered edit">
<t t-esc="widget.inputbuffer"/>
</td>
<t t-if="order.get_change(line)">
<td class="col-change highlight">
<t t-esc="widget.format_currency_no_symbol(order.get_change(line))"/>
</td>
</t>
<t t-if="!order.get_change(line)">
<td class="col-change"/>
</t>
<td class="col-name">
<t t-esc="line.name"/>
</td>
<td class="delete-button" t-att-data-cid="line.cid">
<i class="fa fa-times-circle"/>
</td>
</tr>
</t>
<t t-if="!line.selected">
<tr class="paymentline" t-att-data-cid="line.cid">
<td class="col-due">
<t t-esc="widget.format_currency_no_symbol(order.get_due(line))"/>
</td>
<td class="col-tendered">
<t t-esc="widget.format_currency_no_symbol(line.get_amount())"/>
</td>
<td class="col-change">
<t t-if="order.get_change(line)">
<t t-esc="widget.format_currency_no_symbol(order.get_change(line))"/>
</t>
</td>
<td class="col-name">
<t t-esc="line.name"/>
</td>
<td class="delete-button" t-att-data-cid="line.cid">
<i class="fa fa-times-circle"/>
</td>
</tr>
</t>
</t>
<t t-if="extradue">
<tr class="paymentline extra" t-att-data-cid="0">
<td class="col-due">
<t t-esc="widget.format_currency_no_symbol(extradue)"/>
</td>
</tr>
</t>
</tbody>
</table>
</t>
</t>
<t t-name="PaymentScreen-Numpad">
<div class="numpad">
<button class="input-button number-char" data-action="1">1</button>
<button class="input-button number-char" data-action="2">2</button>
<button class="input-button number-char" data-action="3">3</button>
<button class="mode-button" data-action="+10">+10</button>
<br/>
<button class="input-button number-char" data-action="4">4</button>
<button class="input-button number-char" data-action="5">5</button>
<button class="input-button number-char" data-action="6">6</button>
<button class="mode-button" data-action="+20">+20</button>
<br/>
<button class="input-button number-char" data-action="7">7</button>
<button class="input-button number-char" data-action="8">8</button>
<button class="input-button number-char" data-action="9">9</button>
<button class="mode-button" data-action="+50">+50</button>
<br/>
<button class="input-button numpad-char" data-action="CLEAR">C</button>
<button class="input-button number-char" data-action="0">0</button>
<button class="input-button number-char" t-att-data-action="widget.decimal_point">
<t t-esc="widget.decimal_point"/>
</button>
<button class="input-button numpad-backspace" data-action="BACKSPACE">
<img height="21" src="img/backspace.png" width="24"/>
</button>
</div>
</t>
<t t-name="PaymentScreen-Paymentmethods">
<div class="paymentmethods">
<t t-as="cashregister" t-foreach="widget.pos.cashregisters">
<div class="button paymentmethod" t-att-data-id="cashregister.journal_id[0]">
<t t-esc="cashregister.journal_id[1]"/>
</div>
</t>
</div>
</t>
<t t-name="PaymentScreenWidget">
<div class="payment-screen screen">
<div class="screen-content">
<div class="top-content">
<span class="button back">
<i class="fa fa-angle-double-left"/>
Back
</span>
<h1>Payment</h1>
<span class="button next">
Validate
<i class="fa fa-angle-double-right"/>
</span>
</div>
<div class="left-content pc40 touch-scrollable scrollable-y">
<div class="paymentmethods-container"> </div>
</div>
<div class="right-content pc60 touch-scrollable scrollable-y">
<section class="paymentlines-container"> </section>
<section class="payment-numpad"> </section>
<div class="payment-buttons">
<div class="button js_set_customer">
<i class="fa fa-user"/>
<span class="js_customer_name">
<t t-if="widget.pos.get_client()">
<t t-esc="widget.pos.get_client().name"/>
</t>
<t t-if="!widget.pos.get_client()"> Customer </t>
</span>
</div>
<t t-if="widget.pos.config.iface_invoicing">
<t t-if="widget.pos.get_order()">
<div t-attf-class="button js_invoice #{ widget.pos.get_order().is_to_invoice() ? "highlight" : ""} ">
<i class="fa fa-file-text-o"/>
Invoice
</div>
</t>
</t>
<t t-if="widget.pos.config.tip_product_id">
<div class="button js_tip">
<i class="fa fa-heart"/>
Tip
</div>
</t>
<t t-if="widget.pos.config.iface_cashdrawer">
<div class="button js_cashdrawer">
<i class="fa fa-archive"/>
Open Cashbox
</div>
</t>
</div>
</div>
</div>
</div>
</t>
<t t-name="ReceiptScreenWidget">
<div class="receipt-screen screen">
<div class="screen-content">
<div class="top-content">
<h1>
Change:
<span class="change-value">0.00</span>
</h1>
<span class="button next">
Next Order
<i class="fa fa-angle-double-right"/>
</span>
</div>
<div class="centered-content touch-scrollable">
<div class="button print">
<i class="fa fa-print"/>
Print Receipt
</div>
<div class="pos-receipt-container"> </div>
</div>
</div>
</div>
</t>
<t t-name="XmlReceiptWrappedProductNameLines">
<t t-as="wrapped_line" t-foreach="line.product_name_wrapped.slice(1)">
<line>
<left>
<t t-esc="wrapped_line"/>
</left>
</line>
</t>
</t>
<t t-name="XmlReceipt">
<receipt align="center" value-thousands-separator="" width="40">
<t t-if="receipt.company.logo">
<img t-att-src="receipt.company.logo"/>
<br/>
</t>
<t t-if="!receipt.company.logo">
<h1>
<t t-esc="receipt.company.name"/>
</h1>
<br/>
</t>
<div font="b">
<t t-if="receipt.company.contact_address">
<div>
<t t-esc="receipt.company.contact_address"/>
</div>
</t>
<t t-if="receipt.company.phone">
<div>
Tel:
<t t-esc="receipt.company.phone"/>
</div>
</t>
<t t-if="receipt.company.vat">
<div>
VAT:
<t t-esc="receipt.company.vat"/>
</div>
</t>
<t t-if="receipt.company.email">
<div>
<t t-esc="receipt.company.email"/>
</div>
</t>
<t t-if="receipt.company.website">
<div>
<t t-esc="receipt.company.website"/>
</div>
</t>
<t t-if="receipt.header_xml">
<t t-raw="receipt.header_xml"/>
</t>
<t t-if="!receipt.header_xml and receipt.header">
<div>
<t t-esc="receipt.header"/>
</div>
</t>
<t t-if="receipt.cashier">
<div class="cashier">
<div>--------------------------------</div>
<div>
Served by
<t t-esc="receipt.cashier"/>
</div>
</div>
</t>
</div>
<br/>
<br/>
<div class="orderlines" line-ratio="0.6">
<t t-as="line" t-foreach="receipt.orderlines">
<t t-set="simple" t-value="line.discount === 0 and line.unit_name === "Unit(s)" and line.quantity === 1"/>
<t t-if="simple">
<line>
<left>
<t t-esc="line.product_name_wrapped[0]"/>
</left>
<right>
<value t-att-value-decimals="pos.currency.decimals">
<t t-esc="line.price_display"/>
</value>
</right>
</line>
<t t-call="XmlReceiptWrappedProductNameLines"/>
</t>
<t t-if="!simple">
<line>
<left>
<t t-esc="line.product_name_wrapped[0]"/>
</left>
</line>
<t t-call="XmlReceiptWrappedProductNameLines"/>
<t t-if="line.discount !== 0">
<line indent="1">
<left>
Discount:
<t t-esc="line.discount"/>
%
</left>
</line>
</t>
<line indent="1">
<left>
<value t-att-value-decimals="pos.dp["Product Unit of Measure"]" value-autoint="on">
<t t-esc="line.quantity"/>
</value>
<t t-if="line.unit_name !== "Unit(s)"">
<t t-esc="line.unit_name"/>
</t>
x
<value t-att-value-decimals="pos.dp["Product Price"]">
<t t-esc="line.price"/>
</value>
</left>
<right>
<value t-att-value-decimals="pos.currency.decimals">
<t t-esc="line.price_display"/>
</value>
</right>
</line>
</t>
</t>
</div>
<t t-set="taxincluded" t-value="Math.abs(receipt.subtotal - receipt.total_with_tax) <= 0.000001"/>
<t t-if="!taxincluded">
<line>
<right>--------</right>
</line>
<line>
<left>Subtotal</left>
<right>
<value t-att-value-decimals="pos.currency.decimals">
<t t-esc="receipt.subtotal"/>
</value>
</right>
</line>
<t t-as="tax" t-foreach="receipt.tax_details">
<line>
<left>
<t t-esc="tax.name"/>
</left>
<right>
<value t-att-value-decimals="pos.currency.decimals">
<t t-esc="tax.amount"/>
</value>
</right>
</line>
</t>
</t>
<line>
<right>--------</right>
</line>
<line class="total" size="double-height">
<left>
<pre> TOTAL</pre>
</left>
<right>
<value t-att-value-decimals="pos.currency.decimals">
<t t-esc="receipt.total_with_tax"/>
</value>
</right>
</line>
<br/>
<br/>
<t t-as="line" t-foreach="paymentlines">
<line>
<left>
<t t-esc="line.name"/>
</left>
<right>
<value t-att-value-decimals="pos.currency.decimals">
<t t-esc="line.get_amount()"/>
</value>
</right>
</line>
</t>
<br/>
<line size="double-height">
<left>
<pre> CHANGE</pre>
</left>
<right>
<value t-att-value-decimals="pos.currency.decimals">
<t t-esc="receipt.change"/>
</value>
</right>
</line>
<br/>
<t t-if="receipt.total_discount">
<line>
<left>Discounts</left>
<right>
<value t-att-value-decimals="pos.currency.decimals">
<t t-esc="receipt.total_discount"/>
</value>
</right>
</line>
</t>
<t t-if="taxincluded">
<t t-as="tax" t-foreach="receipt.tax_details">
<line>
<left>
<t t-esc="tax.name"/>
</left>
<right>
<value t-att-value-decimals="pos.currency.decimals">
<t t-esc="tax.amount"/>
</value>
</right>
</line>
</t>
<line>
<left>Total Taxes</left>
<right>
<value t-att-value-decimals="pos.currency.decimals">
<t t-esc="receipt.total_tax"/>
</value>
</right>
</line>
</t>
<div class="before-footer"/>
<t t-if="receipt.footer_xml">
<t t-raw="receipt.footer_xml"/>
</t>
<t t-if="!receipt.footer_xml and receipt.footer">
<br/>
<t t-esc="receipt.footer"/>
<br/>
<br/>
</t>
<div class="after-footer"/>
<br/>
<div font="b">
<div>
<t t-esc="receipt.name"/>
</div>
<div>
<t t-esc="receipt.date.localestring"/>
</div>
</div>
</receipt>
</t>
<t t-name="SaleDetailsReport">
<receipt align="center" value-thousands-separator="" width="40">
<t t-if="pos.company_logo_base64">
<img t-att-src="pos.company_logo_base64"/>
<br/>
</t>
<t t-if="!pos.company_logo_base64">
<h1>
<t t-esc="company.name"/>
</h1>
<br/>
</t>
<br/>
<br/>
<div class="orderlines" line-ratio="0.6">
<t t-as="line" t-foreach="products">
<line>
<left>
<t t-esc="line.product_name.substr(0,20)"/>
</left>
<right>
<value value-autoint="on" value-decimals="2">
<t t-esc="line.quantity"/>
</value>
<t t-if="line.uom !== "Unit(s)"">
<t t-esc="line.uom"/>
</t>
</right>
<right>
<value>
<t t-esc="line.price_unit"/>
</value>
</right>
</line>
<t t-if="line.discount !== 0">
<line indent="1">
<left>
Discount:
<t t-esc="line.discount"/>
%
</left>
</line>
</t>
</t>
</div>
<br/>
<line>
<left>------------------------</left>
</line>
<br/>
<line>
<left>Payments:</left>
</line>
<line t-as="payment" t-foreach="payments">
<left>
<t t-esc="payment.name"/>
</left>
<right>
<t t-esc="widget.format_currency_no_symbol(payment.total)"/>
</right>
</line>
<br/>
<line>
<left>------------------------</left>
</line>
<br/>
<line>
<left>Taxes:</left>
</line>
<line t-as="taxe" t-foreach="taxes">
<left>
<t t-esc="taxe.name"/>
</left>
<right>
<t t-esc="widget.format_currency_no_symbol(taxe.total)"/>
</right>
</line>
<br/>
<line>
<left>------------------------</left>
</line>
<br/>
<line>
<left>Total:</left>
<right>
<t t-esc="widget.format_currency_no_symbol(total_paid)"/>
</right>
</line>
<br/>
<div font="b">
<div>
<t t-esc="date"/>
</div>
</div>
</receipt>
</t>
<t t-name="PopupWidget">
<div class="modal-dialog">
<div class="popup popup-alert">
<p class="title">
<t t-esc=" widget.options.title || 'Alert' "/>
</p>
<p class="body">
<t t-esc=" widget.options.body || '' "/>
</p>
<div class="footer">
<div class="button cancel"> Ok </div>
</div>
</div>
</div>
</t>
<t t-name="ErrorPopupWidget">
<div class="modal-dialog">
<div class="popup popup-error">
<p class="title">
<t t-esc=" widget.options.title || 'Error' "/>
</p>
<p class="body">
<t t-esc=" widget.options.body || '' "/>
</p>
<div class="footer">
<div class="button cancel"> Ok </div>
</div>
</div>
</div>
</t>
<t t-name="ErrorTracebackPopupWidget">
<div class="modal-dialog">
<div class="popup popup-error">
<p class="title">
<t t-esc=" widget.options.title || 'Error' "/>
</p>
<p class="body traceback">
<t t-esc=" widget.options.body || '' "/>
</p>
<div class="footer">
<div class="button cancel"> Ok </div>
<a>
<div class="button icon download_error_file oe_hidden">
<i class="fa fa-arrow-down"/>
</div>
</a>
<div class="button icon download">
<i class="fa fa-download"/>
</div>
<div class="button icon email">
<i class="fa fa-paper-plane"/>
</div>
</div>
</div>
</div>
</t>
<t t-name="ErrorBarcodePopupWidget">
<div class="modal-dialog">
<div class="popup popup-barcode">
<p class="title">
Unknown Barcode
<br/>
<span class="barcode">
<t t-esc="widget.options.barcode"/>
</span>
</p>
<p class="body">
The Point of Sale could not find any product, client, employee or action associated with the scanned barcode.
</p>
<div class="footer">
<div class="button cancel"> Ok </div>
</div>
</div>
</div>
</t>
<t t-name="ConfirmPopupWidget">
<div class="modal-dialog">
<div class="popup popup-confirm">
<p class="title">
<t t-esc=" widget.options.title || 'Confirm ?' "/>
</p>
<p class="body">
<t t-esc=" widget.options.body || '' "/>
</p>
<div class="footer">
<div class="button confirm"> Confirm </div>
<div class="button cancel"> Cancel </div>
</div>
</div>
</div>
</t>
<t t-name="TextInputPopupWidget">
<div class="modal-dialog">
<div class="popup popup-textinput">
<p class="title">
<t t-esc=" widget.options.title || '' "/>
</p>
<input t-att-value="widget.options.value || ''" type="text"/>
<div class="footer">
<div class="button confirm"> Ok </div>
<div class="button cancel"> Cancel </div>
</div>
</div>
</div>
</t>
<t t-name="PackLotLinePopupWidget">
<div class="modal-dialog">
<div class="popup popup-text">
<p class="title">
<t t-esc=" widget.options.title || '' "/>
</p>
<div class="packlot-lines">
<t t-if="widget.options.pack_lot_lines">
<t t-set="focus_lot_line" t-value="widget.focus_model || widget.options.pack_lot_lines.get_empty_model()"/>
<t t-as="lot_line" t-foreach="widget.options.pack_lot_lines.models">
<input class="popup-input packlot-line-input" placeholder="Serial/Lot Number" t-att-autofocus="lot_line === focus_lot_line ? 'autofocus': undefined" t-att-cid="lot_line.cid" t-att-value="lot_line.get('lot_name')" type="text"/>
<i class="oe_link_icon remove-lot fa fa-trash-o"/>
</t>
</t>
</div>
<div class="footer">
<div class="button confirm"> Ok </div>
<div class="button cancel"> Cancel </div>
</div>
</div>
</div>
</t>
<t t-name="TextAreaPopupWidget">
<div class="modal-dialog">
<div class="popup popup-textinput">
<p class="title">
<t t-esc=" widget.options.title || '' "/>
</p>
<textarea cols="40" rows="10">
<t t-esc="widget.options.value"/>
</textarea>
<div class="footer">
<div class="button confirm"> Ok </div>
<div class="button cancel"> Cancel </div>
</div>
</div>
</div>
</t>
<t t-name="SelectionPopupWidget">
<div class="modal-dialog">
<div class="popup popup-selection">
<p class="title">
<t t-esc=" widget.options.title || 'Select' "/>
</p>
<div class="selection scrollable-y touch-scrollable">
<t t-as="item" t-foreach="widget.list || []">
<div t-att-data-item-index="item_index" t-attf-class="selection-item {{ widget.is_selected.call(widget, item.item) ? 'selected' : '' }}">
<t t-esc="item.label"/>
</div>
</t>
</div>
<div class="footer">
<div class="button cancel"> Cancel </div>
</div>
</div>
</div>
</t>
<t t-name="NumberPopupWidget">
<div class="modal-dialog">
<div class="popup popup-number">
<p class="title">
<t t-esc=" widget.options.title || '' "/>
</p>
<div class="popup-input value active">
<t t-esc="widget.inputbuffer"/>
</div>
<div class="popup-numpad">
<button class="input-button number-char" data-action="1">1</button>
<button class="input-button number-char" data-action="2">2</button>
<button class="input-button number-char" data-action="3">3</button>
<t t-if="widget.options.cheap">
<button class="mode-button add" data-action="+1">+1</button>
</t>
<t t-if="!widget.options.cheap">
<button class="mode-button add" data-action="+10">+10</button>
</t>
<br/>
<button class="input-button number-char" data-action="4">4</button>
<button class="input-button number-char" data-action="5">5</button>
<button class="input-button number-char" data-action="6">6</button>
<t t-if="widget.options.cheap">
<button class="mode-button add" data-action="+2">+2</button>
</t>
<t t-if="!widget.options.cheap">
<button class="mode-button add" data-action="+20">+20</button>
</t>
<br/>
<button class="input-button number-char" data-action="7">7</button>
<button class="input-button number-char" data-action="8">8</button>
<button class="input-button number-char" data-action="9">9</button>
<t t-if="widget.options.cheap">
<button class="mode-button add" data-action="+5">+5</button>
</t>
<t t-if="!widget.options.cheap">
<button class="mode-button add" data-action="+50">+50</button>
</t>
<br/>
<button class="input-button numpad-char" data-action="CLEAR">C</button>
<button class="input-button number-char" data-action="0">0</button>
<button class="input-button number-char dot" t-att-data-action="widget.decimal_separator">
<t t-esc="widget.decimal_separator"/>
</button>
<button class="input-button numpad-backspace" data-action="BACKSPACE">
<img height="21" src="img/backspace.png" style="pointer-events: none;" width="24"/>
</button>
<br/>
</div>
<div class="footer centered">
<div class="button cancel"> Cancel </div>
<div class="button confirm"> Ok </div>
</div>
</div>
</div>
</t>
<t t-name="OrderImportPopupWidget">
<div class="modal-dialog">
<div class="popup popup-import">
<p class="title">Finished Importing Orders</p>
<t t-if="widget.options and widget.options.report">
<t t-set="report" t-value="widget.options.report"/>
<t t-set="unpaid_skipped" t-value="(report.unpaid_skipped_existing || 0) + (report.unpaid_skipped_session || 0)"/>
<ul class="body">
<li>
Successfully imported
<b>
<t t-esc="report.paid || 0"/>
</b>
paid orders
</li>
<li>
Successfully imported
<b>
<t t-esc="report.unpaid || 0"/>
</b>
unpaid orders
</li>
<t t-if="unpaid_skipped">
<li>
<b>
<t t-esc="unpaid_skipped"/>
</b>
unpaid orders could not be imported
<ul>
<li>
<b>
<t t-esc="report.unpaid_skipped_existing || 0"/>
</b>
were duplicates of existing orders
</li>
<li>
<b>
<t t-esc="report.unpaid_skipped_session || 0"/>
</b>
belong to another session:
<t t-if="report.unpaid_skipped_sessions">
<ul>
<li>
Session ids:
<b>
<t t-esc="JSON.stringify(report.unpaid_skipped_sessions)"/>
</b>
</li>
</ul>
</t>
</li>
</ul>
</li>
</t>
</ul>
</t>
<div class="footer">
<div class="button cancel"> Ok </div>
</div>
</div>
</div>
</t>
<t t-name="Product">
<span class="product" t-att-data-product-id="product.id">
<div class="product-img">
<img t-att-src="image_url"/>
<t t-if="!product.to_weight">
<span class="price-tag">
<t t-esc="widget.format_currency(product.get_price(pricelist, 1),'Product Price')"/>
</span>
</t>
<t t-if="product.to_weight">
<span class="price-tag">
<t t-esc="widget.format_currency(product.get_price(pricelist, 1),'Product Price')+'/'+widget.pos.units_by_id[product.uom_id[0]].name"/>
</span>
</t>
</div>
<div class="product-name">
<t t-esc="product.display_name"/>
</div>
</span>
</t>
<t t-name="Orderline">
<li t-attf-class="orderline #{ line.selected ? 'selected' : '' }">
<span class="product-name">
<t t-esc="line.get_product().display_name"/>
<t t-if="line.get_product().tracking!=='none'">
<i t-attf-class="oe_link_icon fa fa-list oe_icon line-lot-icon #{line.has_valid_product_lot() ? 'oe_green' : 'oe_red' }"/>
</t>
</span>
<span class="price">
<t t-esc="widget.format_currency(line.get_display_price())"/>
</span>
<ul class="info-list">
<t t-if="line.get_quantity_str() !== '1' || line.selected ">
<li class="info">
<em>
<t t-esc="line.get_quantity_str()"/>
</em>
<t t-esc="line.get_unit().name"/>
at
<t t-esc="widget.format_currency(line.get_unit_display_price(),'Product Price')"/>
/
<t t-esc="line.get_unit().name"/>
</li>
</t>
<t t-if="line.get_discount_str() !== '0'">
<li class="info">
With a
<em>
<t t-esc="line.get_discount_str()"/>
%
</em>
discount
</li>
</t>
</ul>
</li>
</t>
<t t-name="OrderWidget">
<div class="order-container">
<div class="order-scroller touch-scrollable">
<div class="order">
<t t-if="orderlines.length === 0">
<div class="order-empty">
<i class="fa fa-shopping-cart"/>
<h1>Your shopping cart is empty</h1>
</div>
</t>
<t t-if="orderlines.length > 0">
<ul class="orderlines"/>
<div class="summary clearfix">
<div class="line">
<div class="entry total">
<span class="label">Total: </span>
<span class="value">0.00 €</span>
<div class="subentry">
Taxes:
<span class="value">0.00€</span>
</div>
</div>
</div>
</div>
</t>
</div>
</div>
</div>
</t>
<t t-name="DebugWidget">
<div class="debug-widget oe_hidden">
<h1>Debug Window</h1>
<div class="toggle">
<i class="fa fa-times"/>
</div>
<div class="content">
<p class="category">Electronic Scale</p>
<ul>
<li>
<input class="weight" type="text"/>
</li>
<li class="button set_weight">Set Weight</li>
<li class="button reset_weight">Reset</li>
</ul>
<p class="category">Barcode Scanner</p>
<ul>
<li>
<input class="ean" type="text"/>
</li>
<li class="button barcode">Scan</li>
<li class="button custom_ean">Scan EAN-13</li>
</ul>
<p class="category">Orders</p>
<ul>
<li class="button delete_orders">Delete Paid Orders</li>
<li class="button delete_unpaid_orders">Delete Unpaid Orders</li>
<li class="button export_paid_orders">Export Paid Orders</li>
<a>
<li class="button download_paid_orders oe_hidden">Download Paid Orders</li>
</a>
<li class="button export_unpaid_orders">Export Unpaid Orders</li>
<a>
<li class="button download_unpaid_orders oe_hidden">Download Unpaid Orders</li>
</a>
<li class="button import_orders" style="position:relative">
Import Orders
<input style="opacity:0;position:absolute;top:0;left:0;right:0;bottom:0;margin:0;cursor:pointer" type="file"/>
</li>
</ul>
<p class="category">Hardware Status</p>
<ul>
<li class="status weighing">Weighing</li>
<li class="button display_refresh">Refresh Display</li>
</ul>
<p class="category">Hardware Events</p>
<ul>
<li class="event open_cashbox">Open Cashbox</li>
<li class="event print_receipt">Print Receipt</li>
<li class="event scale_read">Read Weighing Scale</li>
</ul>
</div>
</div>
</t>
<t t-name="Paymentline">
<div t-attf-class="paymentline #{line.selected ? 'selected' : ''}">
<div class="paymentline-name">
<t t-esc="line.name"/>
</div>
<input class="paymentline-input" step="0.01" t-att-type="widget.decimal_point === '.' ? 'number' : 'text'" t-att-value="line.get_amount_str()" t-attf-pattern="[0-9]+([\\#{widget.decimal_point || '.' }][0-9]+)?"/>
<span class="paymentline-delete">
<img src="/point_of_sale/static/src/img/search_reset.gif"/>
</span>
</div>
</t>
<t t-name="PaymentlineOld">
<tr t-attf-class="paymentline #{line.selected ? 'selected' : ''}">
<td class="paymentline-type">
<t t-esc="line.name"/>
</td>
<td class="paymentline-amount pos-right-align">
<input step="0.01" t-att-value="line.get_amount_str()" type="number"/>
<span class="delete-payment-line">
<img src="/point_of_sale/static/src/img/search_reset.gif"/>
</span>
</td>
</tr>
</t>
<t t-name="OrderSelectorWidget">
<div class="order-selector">
<span class="orders touch-scrollable">
<t t-as="order" t-foreach="widget.pos.get_order_list()">
<t t-if="order === widget.pos.get_order()">
<span class="order-button select-order selected" t-att-data-uid="order.uid">
<span class="order-sequence">
<t t-esc="order.sequence_number"/>
</span>
<t t-esc="moment(order.creation_date).format('hh:mm')"/>
</span>
</t>
<t t-if="order !== widget.pos.get_order()">
<span class="order-button select-order" t-att-data-uid="order.uid">
<span class="order-sequence">
<t t-esc="order.sequence_number"/>
</span>
</span>
</t>
</t>
</span>
<span class="order-button square neworder-button">
<i class="fa fa-plus"/>
</span>
<span class="order-button square deleteorder-button">
<i class="fa fa-minus"/>
</span>
</div>
</t>
<t t-name="UsernameWidget">
<span class="username">
<t t-esc="widget.get_name()"/>
</span>
</t>
<t t-name="PosTicket">
<div class="pos-sale-ticket">
<div class="pos-center-align">
<t t-esc="order.formatted_validation_date"/>
<t t-esc="order.name"/>
</div>
<br/>
<t t-esc="widget.pos.company.name"/>
<br/>
<div class="receipt-phone">
Phone:
<t t-esc="widget.pos.company.phone || ''"/>
<br/>
</div>
<div class="receipt-user">
User:
<t t-esc="widget.pos.get_cashier().name"/>
<br/>
</div>
<br/>
<t t-if="receipt.header">
<div style="text-align:center">
<t t-esc="receipt.header"/>
</div>
<br/>
</t>
<table class="receipt-orderlines">
<colgroup>
<col width="50%"/>
<col width="25%"/>
<col width="25%"/>
</colgroup>
<tr t-as="orderline" t-foreach="orderlines">
<td>
<t t-esc="orderline.get_product().display_name"/>
<t t-if="orderline.get_discount() > 0">
<div class="pos-disc-font">
With a
<t t-esc="orderline.get_discount()"/>
% discount
</div>
</t>
</td>
<td class="pos-right-align">
<t t-esc="orderline.get_quantity_str_with_unit()"/>
</td>
<td class="pos-right-align">
<t t-esc="widget.format_currency(orderline.get_display_price())"/>
</td>
</tr>
</table>
<br/>
<table class="receipt-total">
<tr>
<td>Subtotal:</td>
<td class="pos-right-align">
<t t-esc="widget.format_currency(order.get_total_without_tax())"/>
</td>
</tr>
<t t-as="taxdetail" t-foreach="order.get_tax_details()">
<tr>
<td>
<t t-esc="taxdetail.name"/>
</td>
<td class="pos-right-align">
<t t-esc="widget.format_currency(taxdetail.amount)"/>
</td>
</tr>
</t>
<tr>
<t t-if="order.get_total_discount() > 0">
<td>Discount:</td>
<td class="pos-right-align">
<t t-esc="widget.format_currency(order.get_total_discount())"/>
</td>
</t>
</tr>
<tr class="emph">
<td>Total:</td>
<td class="pos-right-align">
<t t-esc="widget.format_currency(order.get_total_with_tax())"/>
</td>
</tr>
</table>
<br/>
<table class="receipt-paymentlines">
<t t-as="line" t-foreach="paymentlines">
<tr>
<td>
<t t-esc="line.name"/>
</td>
<td class="pos-right-align">
<t t-esc="widget.format_currency(line.get_amount())"/>
</td>
</tr>
</t>
</table>
<br/>
<table class="receipt-change">
<tr>
<td>Change:</td>
<td class="pos-right-align">
<t t-esc="widget.format_currency(order.get_change())"/>
</td>
</tr>
</table>
<t t-if="receipt.footer">
<br/>
<div style="text-align:center">
<t t-esc="receipt.footer"/>
</div>
</t>
</div>
</t>
<t t-name="OnscreenKeyboardFull">
<div class="keyboard_frame">
<ul class="keyboard full_keyboard">
<li class="symbol">
<span class="off">`</span>
<span class="on">~</span>
</li>
<li class="symbol">
<span class="off">1</span>
<span class="on">!</span>
</li>
<li class="symbol">
<span class="off">2</span>
<span class="on">@</span>
</li>
<li class="symbol">
<span class="off">3</span>
<span class="on">#</span>
</li>
<li class="symbol">
<span class="off">4</span>
<span class="on">$</span>
</li>
<li class="symbol">
<span class="off">5</span>
<span class="on">%</span>
</li>
<li class="symbol">
<span class="off">6</span>
<span class="on">^</span>
</li>
<li class="symbol">
<span class="off">7</span>
<span class="on">&</span>
</li>
<li class="symbol">
<span class="off">8</span>
<span class="on">*</span>
</li>
<li class="symbol">
<span class="off">9</span>
<span class="on">(</span>
</li>
<li class="symbol">
<span class="off">0</span>
<span class="on">)</span>
</li>
<li class="symbol">
<span class="off">-</span>
<span class="on">_</span>
</li>
<li class="symbol">
<span class="off">=</span>
<span class="on">+</span>
</li>
<li class="delete lastitem">delete</li>
<li class="tab firstitem">tab</li>
<li class="letter">q</li>
<li class="letter">w</li>
<li class="letter">e</li>
<li class="letter">r</li>
<li class="letter">t</li>
<li class="letter">y</li>
<li class="letter">u</li>
<li class="letter">i</li>
<li class="letter">o</li>
<li class="letter">p</li>
<li class="symbol">
<span class="off">[</span>
<span class="on">{</span>
</li>
<li class="symbol">
<span class="off">]</span>
<span class="on">}</span>
</li>
<li class="symbol lastitem">
<span class="off">\</span>
<span class="on">|</span>
</li>
<li class="capslock firstitem">caps lock</li>
<li class="letter">a</li>
<li class="letter">s</li>
<li class="letter">d</li>
<li class="letter">f</li>
<li class="letter">g</li>
<li class="letter">h</li>
<li class="letter">j</li>
<li class="letter">k</li>
<li class="letter">l</li>
<li class="symbol">
<span class="off">;</span>
<span class="on">:</span>
</li>
<li class="symbol">
<span class="off">'</span>
<span class="on">"</span>
</li>
<li class="return lastitem">return</li>
<li class="left-shift firstitem">shift</li>
<li class="letter">z</li>
<li class="letter">x</li>
<li class="letter">c</li>
<li class="letter">v</li>
<li class="letter">b</li>
<li class="letter">n</li>
<li class="letter">m</li>
<li class="symbol">
<span class="off">,</span>
<span class="on"><</span>
</li>
<li class="symbol">
<span class="off">.</span>
<span class="on">></span>
</li>
<li class="symbol">
<span class="off">/</span>
<span class="on">?</span>
</li>
<li class="right-shift lastitem">shift</li>
<li class="space firstitem lastitem">&nbsp;</li>
</ul>
<p class="close_button">close</p>
</div>
</t>
<t t-name="OnscreenKeyboardSimple">
<div class="keyboard_frame">
<ul class="keyboard simple_keyboard">
<li class="symbol firstitem row_qwerty">
<span class="off">q</span>
<span class="on">1</span>
</li>
<li class="symbol">
<span class="off">w</span>
<span class="on">2</span>
</li>
<li class="symbol">
<span class="off">e</span>
<span class="on">3</span>
</li>
<li class="symbol">
<span class="off">r</span>
<span class="on">4</span>
</li>
<li class="symbol">
<span class="off">t</span>
<span class="on">5</span>
</li>
<li class="symbol">
<span class="off">y</span>
<span class="on">6</span>
</li>
<li class="symbol">
<span class="off">u</span>
<span class="on">7</span>
</li>
<li class="symbol">
<span class="off">i</span>
<span class="on">8</span>
</li>
<li class="symbol">
<span class="off">o</span>
<span class="on">9</span>
</li>
<li class="symbol lastitem">
<span class="off">p</span>
<span class="on">0</span>
</li>
<li class="symbol firstitem row_asdf">
<span class="off">a</span>
<span class="on">@</span>
</li>
<li class="symbol">
<span class="off">s</span>
<span class="on">#</span>
</li>
<li class="symbol">
<span class="off">d</span>
<span class="on">%</span>
</li>
<li class="symbol">
<span class="off">f</span>
<span class="on">*</span>
</li>
<li class="symbol">
<span class="off">g</span>
<span class="on">/</span>
</li>
<li class="symbol">
<span class="off">h</span>
<span class="on">-</span>
</li>
<li class="symbol">
<span class="off">j</span>
<span class="on">+</span>
</li>
<li class="symbol">
<span class="off">k</span>
<span class="on">(</span>
</li>
<li class="symbol lastitem">
<span class="off">l</span>
<span class="on">)</span>
</li>
<li class="symbol firstitem row_zxcv">
<span class="off">z</span>
<span class="on">?</span>
</li>
<li class="symbol">
<span class="off">x</span>
<span class="on">!</span>
</li>
<li class="symbol">
<span class="off">c</span>
<span class="on">"</span>
</li>
<li class="symbol">
<span class="off">v</span>
<span class="on">'</span>
</li>
<li class="symbol">
<span class="off">b</span>
<span class="on">:</span>
</li>
<li class="symbol">
<span class="off">n</span>
<span class="on">;</span>
</li>
<li class="symbol">
<span class="off">m</span>
<span class="on">,</span>
</li>
<li class="delete lastitem">delete</li>
<li class="numlock firstitem row_space">
<span class="off">123</span>
<span class="on">ABC</span>
</li>
<li class="space">&nbsp;</li>
<li class="symbol">
<span class="off">.</span>
<span class="on">.</span>
</li>
<li class="return lastitem">return</li>
</ul>
<p class="close_button">close</p>
</div>
</t>
<t t-name="CustomerFacingDisplayHead">
<div class="resources">
<base t-att-href="origin"/>
<link href="/point_of_sale/static/src/css/customer_facing_display.css" rel="stylesheet"/>
<script type="text/javascript">
// This function needs to be named that way, call it the foreign JS API // The posbox will execute it, with the behavior intended function foreign_js(){ if ($('.pos-adv').hasClass('pos-hidden')) { $('.pos-customer_facing_display').addClass('pos-js_no_ADV'); } $(window).on('resize', function () { $('.pos-customer_facing_display').toggleClass('pos-js_no_ADV', $('.pos-adv').hasClass('pos-hidden')); }).trigger('resize'); };
</script>
</div>
</t>
<t t-name="CustomerFacingDisplayOrderLines">
<t t-as="orderline" t-foreach="orderlines">
<div class="pos_orderlines_item">
<div>
<div t-attf-style="background-image:url(#{orderline.product.image_base64})"/>
</div>
<div>
<t t-esc="orderline.product.display_name"/>
</div>
<div>
<t t-esc="orderline.get_quantity_str()"/>
</div>
<div>
<t t-esc="widget.format_currency(orderline.get_display_price())"/>
</div>
</div>
</t>
</t>
<t t-name="CustomerFacingDisplayPaymentLines">
<t t-as="paymentline" t-foreach="order.get_paymentlines()">
<div>
<span>
<t t-esc="paymentline.name"/>
</span>
</div>
<div>
<span>
<t t-esc="widget.format_currency(paymentline.get_amount())"/>
</span>
</div>
</t>
<t t-if="order.get_paymentlines().length > 0">
<div>
<span class="pos-change_title">Change:</span>
</div>
<div>
<span class="pos-change_amount">
<t t-esc="widget.format_currency(order.get_change())"/>
</span>
</div>
</t>
</t>
<t t-name="SubmitOrderButton">
<span class="control-button order-submit">
<i class="fa fa-cutlery"/>
Order
</span>
</t>
<t t-name="NameWrapped">
<t t-as="wrapped_line" t-foreach="change.name_wrapped.slice(1)">
<line>
<left/>
<right>
<t t-esc="wrapped_line"/>
</right>
</line>
</t>
</t>
<t t-name="OrderChangeReceipt">
<receipt align="center" line-ratio="0.4" size="double-height" value-autoint="on" value-decimals="3" value-thousands-separator="" width="40">
<div size="normal">
<t t-esc="changes.name"/>
</div>
<t t-if="changes.floor || changes.table">
<br/>
<div>
<span>
<t t-esc="changes.floor"/>
</span>
/
<span bold="on" size="double">
<t t-esc="changes.table"/>
</span>
</div>
</t>
<br/>
<br/>
<t t-if="changes.cancelled.length > 0">
<div color="red">
<div bold="on" size="double">
CANCELLED
<span bold="off" size="double-height">
<t t-esc="changes.time.hours"/>
:
<t t-esc="changes.time.minutes"/>
</span>
</div>
<br/>
<br/>
<t t-as="change" t-foreach="changes.cancelled">
<line>
<left>
<value>
<t t-esc="change.qty"/>
</value>
</left>
<right>
<t t-esc="change.name_wrapped[0]"/>
</right>
</line>
<t t-call="NameWrapped"/>
<t t-if="change.note">
<line>
<left>NOTE</left>
<right>...</right>
</line>
<div>
<span bold="off" font="b" indent="1" line-ratio="0.4" width="30">
---
<t t-esc="change.note"/>
</span>
</div>
<line/>
</t>
</t>
<br/>
<br/>
</div>
</t>
<t t-if="changes.new.length > 0">
<div bold="on" size="double">
NEW
<span bold="off" size="double-height">
<t t-esc="changes.time.hours"/>
:
<t t-esc="changes.time.minutes"/>
</span>
</div>
<br/>
<br/>
<t t-as="change" t-foreach="changes.new">
<line>
<left>
<value>
<t t-esc="change.qty"/>
</value>
</left>
<right>
<t t-esc="change.name_wrapped[0]"/>
</right>
</line>
<t t-call="NameWrapped"/>
<t t-if="change.note">
<line>
<left>NOTE</left>
<right>...</right>
</line>
<div>
<span bold="off" font="b" indent="1" line-ratio="0.4" width="30">
---
<t t-esc="change.note"/>
</span>
</div>
<line/>
</t>
</t>
<br/>
<br/>
</t>
</receipt>
</t>
<t t-name="SplitbillButton">
<span class="control-button order-split">
<i class="fa fa-files-o"/>
Split
</span>
</t>
<t t-name="SplitOrderline">
<li t-att-data-id="id" t-attf-class="orderline #{ selected ? 'selected' : ''} #{ quantity !== line.get_quantity() ? 'partially' : '' }">
<span class="product-name">
<t t-esc="line.get_product().display_name"/>
</span>
<span class="price">
<t t-esc="widget.format_currency(line.get_display_price())"/>
</span>
<ul class="info-list">
<t t-if="line.get_quantity_str() !== '1'">
<li class="info">
<t t-if="selected and line.get_unit().is_pos_groupable">
<em class="big">
<t t-esc="quantity"/>
</em>
/
<t t-esc="line.get_quantity_str()"/>
</t>
<t t-if="!(selected and line.get_unit().is_pos_groupable)">
<em>
<t t-esc="line.get_quantity_str()"/>
</em>
</t>
<t t-esc="line.get_unit().name"/>
at
<t t-esc="widget.format_currency(line.get_unit_price())"/>
/
<t t-esc="line.get_unit().name"/>
</li>
</t>
<t t-if="line.get_discount_str() !== '0'">
<li class="info">
With a
<em>
<t t-esc="line.get_discount_str()"/>
%
</em>
discount
</li>
</t>
</ul>
</li>
</t>
<t t-name="SplitbillScreenWidget">
<div class="splitbill-screen screen">
<div class="screen-content">
<div class="top-content">
<span class="button back">
<i class="fa fa-angle-double-left"/>
Back
</span>
<h1>Bill Splitting</h1>
</div>
<div class="left-content touch-scrollable scrollable-y">
<div class="order">
<ul class="orderlines"> </ul>
</div>
</div>
<div class="right-content touch-scrollable scrollable-y">
<div class="order-info">
<span class="subtotal">
<t t-esc="widget.format_currency(0.0)"/>
</span>
</div>
<div class="paymentmethods">
<div class="button payment">
<i class="fa fa-chevron-right"/>
Payment
</div>
</div>
</div>
</div>
</div>
</t>
<t t-name="BillScreenWidget">
<div class="receipt-screen screen">
<div class="screen-content">
<div class="top-content">
<span class="button back">
<i class="fa fa-angle-double-left"/>
Back
</span>
<h1>Bill Printing</h1>
<span class="button next">
Ok
<i class="fa fa-angle-double-right"/>
</span>
</div>
<div class="centered-content">
<div class="button print">
<i class="fa fa-print"/>
Print
</div>
<div class="pos-receipt-container"> </div>
</div>
</div>
</div>
</t>
<t t-name="PrintBillButton">
<span class="control-button order-printbill">
<i class="fa fa-print"/>
Bill
</span>
</t>
<t t-name="BillReceipt">
<receipt align="center" value-thousands-separator="" width="40">
<t t-if="receipt.company.logo">
<img t-att-src="receipt.company.logo"/>
<br/>
</t>
<t t-if="!receipt.company.logo">
<h1>
<t t-esc="receipt.company.name"/>
</h1>
<br/>
</t>
<div font="b">
<t t-if="receipt.shop.name">
<div>
<t t-esc="receipt.shop.name"/>
</div>
</t>
<t t-if="receipt.company.contact_address">
<div>
<t t-esc="receipt.company.contact_address"/>
</div>
</t>
<t t-if="receipt.company.phone">
<div>
Tel:
<t t-esc="receipt.company.phone"/>
</div>
</t>
<t t-if="receipt.company.vat">
<div>
<t t-esc="receipt.company.vat_label or 'TIN'"/>
:
<t t-esc="receipt.company.vat"/>
</div>
</t>
<t t-if="receipt.company.email">
<div>
<t t-esc="receipt.company.email"/>
</div>
</t>
<t t-if="receipt.company.website">
<div>
<t t-esc="receipt.company.website"/>
</div>
</t>
<t t-if="receipt.header">
<div>
<t t-esc="receipt.header"/>
</div>
</t>
<t t-if="receipt.cashier">
<div class="cashier">
<div>--------------------------------</div>
<div>
Served by
<t t-esc="receipt.cashier"/>
</div>
</div>
</t>
</div>
<br/>
<br/>
<div line-ratio="0.6">
<t t-as="line" t-foreach="receipt.orderlines">
<t t-set="simple" t-value="line.discount === 0 and line.unit_name === "Unit(s)" and line.quantity === 1"/>
<t t-if="simple">
<line>
<left>
<t t-esc="line.product_name"/>
</left>
<right>
<value>
<t t-esc="line.price_display"/>
</value>
</right>
</line>
</t>
<t t-if="!simple">
<line>
<left>
<t t-esc="line.product_name"/>
</left>
</line>
<t t-if="line.discount !== 0">
<line indent="1">
<left>
Discount:
<t t-esc="line.discount"/>
%
</left>
</line>
</t>
<line indent="1">
<left>
<value value-autoint="on" value-decimals="3">
<t t-esc="line.quantity"/>
</value>
<t t-if="line.unit_name !== "Unit(s)"">
<t t-esc="line.unit_name"/>
</t>
x
<value value-decimals="2">
<t t-esc="line.price"/>
</value>
</left>
<right>
<value>
<t t-esc="line.price_display"/>
</value>
</right>
</line>
</t>
</t>
</div>
<t t-set="taxincluded" t-value="Math.abs(receipt.subtotal - receipt.total_with_tax) <= 0.000001"/>
<t t-if="!taxincluded">
<line>
<right>--------</right>
</line>
<line>
<left>Subtotal</left>
<right>
<value>
<t t-esc="receipt.subtotal"/>
</value>
</right>
</line>
<t t-as="tax" t-foreach="receipt.tax_details">
<line>
<left>
<t t-esc="tax.name"/>
</left>
<right>
<value>
<t t-esc="tax.amount"/>
</value>
</right>
</line>
</t>
</t>
<line>
<right>--------</right>
</line>
<line size="double-height">
<left>
<pre> TOTAL</pre>
</left>
<right>
<value>
<t t-esc="receipt.total_with_tax"/>
</value>
</right>
</line>
<br/>
<br/>
<t t-if="receipt.total_discount">
<line>
<left>Discounts</left>
<right>
<value>
<t t-esc="receipt.total_discount"/>
</value>
</right>
</line>
</t>
<t t-if="taxincluded">
<t t-as="tax" t-foreach="receipt.tax_details">
<line>
<left>
<t t-esc="tax.name"/>
</left>
<right>
<value>
<t t-esc="tax.amount"/>
</value>
</right>
</line>
</t>
</t>
<t t-if="receipt.footer_xml">
<t t-raw="receipt.footer_xml"/>
</t>
<t t-if="!receipt.footer_xml and receipt.footer">
<br/>
<t t-esc="receipt.footer"/>
<br/>
<br/>
</t>
<br/>
<div font="b">
<div>
<t t-esc="receipt.name"/>
</div>
<div>
<t t-esc="receipt.date.localestring"/>
</div>
</div>
</receipt>
</t>
<t t-extend="Orderline">
<t t-jquery=".info-list" t-operation="append">
<t t-if="line.get_note()">
<li class="info orderline-note">
<i class="fa fa-tag"/>
<t t-esc="line.get_note()"/>
</li>
</t>
</t>
</t>
<t t-name="OrderlineNoteButton">
<div class="control-button">
<i class="fa fa-tag"/>
Note
</div>
</t>
<t t-extend="XmlReceipt">
<t t-jquery=".cashier" t-operation="append">
<t t-if="receipt.table">
at table
<t t-esc="receipt.table"/>
</t>
<t t-if="receipt.customer_count">
<div>
Guests:
<t t-esc="receipt.customer_count"/>
</div>
</t>
</t>
</t>
<t t-extend="BillReceipt">
<t t-jquery=".cashier" t-operation="append">
<t t-if="receipt.table">
at table
<t t-esc="receipt.table"/>
</t>
<t t-if="receipt.customer_count">
<div>
Guests:
<t t-esc="receipt.customer_count"/>
</div>
</t>
</t>
</t>
<t t-name="TableGuestsButton">
<div class="control-button">
<span class="control-button-number">
<t t-esc="widget.guests()"/>
</span>
Guests
</div>
</t>
<t t-name="TransferOrderButton">
<div class="control-button">
<i class="fa fa-arrow-right"/>
Transfer
</div>
</t>
<t t-name="TableWidget">
<t t-if="!widget.selected">
<div class="table" t-att-style="widget.table_style_str()">
<span t-att-class=""table-cover " + (widget.fill >= 1 ? "full" : "")" t-att-style=""height: " + Math.ceil(widget.fill * 100) + "%;"" t-if="widget.table.shape"/>
<t t-if="widget.order_count">
<span t-att-class=""order-count " + (widget.notifications.printing ? "notify-printing":"") + (widget.notifications.skipped ? "notify-skipped" : "")">
<t t-esc="widget.order_count"/>
</span>
</t>
<span class="label">
<t t-esc="widget.table.name"/>
</span>
<span class="table-seats">
<t t-esc="widget.table.seats"/>
</span>
</div>
</t>
<t t-if="widget.selected">
<div class="table selected" t-att-style="widget.table_style_str()">
<span class="label">
<t t-esc="widget.table.name"/>
</span>
<span class="table-seats">
<t t-esc="widget.table.seats"/>
</span>
<t t-if="widget.table.shape === 'round'">
<span class="table-handle top"/>
<span class="table-handle bottom"/>
<span class="table-handle left"/>
<span class="table-handle right"/>
</t>
<t t-if="widget.table.shape === 'square'">
<span class="table-handle top right"/>
<span class="table-handle top left"/>
<span class="table-handle bottom right"/>
<span class="table-handle bottom left"/>
</t>
</div>
</t>
</t>
<t t-name="BackToFloorButton">
<span class="order-button floor-button">
<i class="fa fa-angle-double-left"/>
<t t-esc="floor.name"/>
<span class="table-name">
(
<t t-esc="table.name"/>
)
</span>
</span>
</t>
<t t-name="FloorScreenWidget">
<div class="floor-screen screen">
<div class="screen-content-flexbox">
<t t-if="widget.pos.floors.length > 1">
<div class="floor-selector">
<t t-as="floor" t-foreach="widget.pos.floors">
<t t-if="floor.id === widget.floor.id">
<span class="button button-floor active" t-att-data-id="floor.id">
<t t-esc="floor.name"/>
</span>
</t>
<t t-if="floor.id !== widget.floor.id">
<span class="button button-floor" t-att-data-id="floor.id">
<t t-esc="floor.name"/>
</span>
</t>
</t>
</div>
</t>
<div class="floor-map" t-att-style="widget.get_floor_style()">
<div class="empty-floor oe_hidden">
This floor has no tables yet, use the
<i class="fa fa-plus"/>
button in the editing toolbar to create new tables.
</div>
<div class="tables"/>
<span class="edit-button editing" t-if="widget.pos.user.role == 'manager'">
<i class="fa fa-pencil"/>
</span>
<div class="edit-bar oe_hidden">
<span class="edit-button new-table">
<i class="fa fa-plus"/>
</span>
<span class="edit-button dup-table needs-selection">
<i class="fa fa-files-o"/>
</span>
<span class="edit-button rename needs-selection">
<i class="fa fa-font"/>
</span>
<span class="edit-button seats needs-selection">
<i class="fa fa-user"/>
</span>
<span class="edit-button shape needs-selection">
<span class="button-option square">
<i class="fa fa-square-o"/>
</span>
<span class="button-option round oe_hidden">
<i class="fa fa-circle-o"/>
</span>
</span>
<span class="edit-button color">
<i class="fa fa-tint"/>
<div class="color-picker fg-picker oe_hidden">
<div class="close-picker">
<i class="fa fa-times"/>
</div>
<span class="color tl" style="background-color:#EB6D6D"/>
<span class="color" style="background-color:#35D374"/>
<span class="color tr" style="background-color:#6C6DEC"/>
<span class="color" style="background-color:#EBBF6D"/>
<span class="color" style="background-color:#EBEC6D"/>
<span class="color" style="background-color:#AC6DAD"/>
<span class="color bl" style="background-color:#6C6D6D"/>
<span class="color" style="background-color:#ACADAD"/>
<span class="color br" style="background-color:#4ED2BE"/>
</div>
<div class="color-picker bg-picker oe_hidden">
<div class="close-picker">
<i class="fa fa-times"/>
</div>
<span class="color tl" style="background-color:rgb(244, 149, 149)"/>
<span class="color" style="background-color:rgb(130, 233, 171)"/>
<span class="color tr" style="background-color:rgb(136, 137, 242)"/>
<span class="color" style="background-color:rgb(255, 214, 136)"/>
<span class="color" style="background-color:rgb(254, 255, 154)"/>
<span class="color" style="background-color:rgb(209, 171, 210)"/>
<span class="color bl" style="background-color:rgb(75, 75, 75)"/>
<span class="color" style="background-color:rgb(210, 210, 210)"/>
<span class="color br" style="background-color:rgb(127, 221, 236)"/>
</div>
</span>
<span class="edit-button trash needs-selection">
<i class="fa fa-trash"/>
</span>
</div>
</div>
</div>
</div>
</t>
<t t-name="portal.chatter_message_count">
<t t-set="count" t-value="widget.get('message_count')"/>
<div class="o_message_counter">
<t t-if="count">
<span class="o_message_count fa fa-comments">
<t t-esc="count"/>
</span>
<t t-if="count == 1">comment</t>
<t t-else="">comments</t>
</t>
<t t-else=""> There are no comments for now. </t>
</div>
</t>
<t t-name="portal.chatter_composer">
<div class="o_portal_chatter_composer" t-if="widget.options['allow_composer']">
<t t-if="!widget.options['display_composer']">
<h4>Leave a comment</h4>
<p>
You must be
<a t-attf-href="/web/login?redirect=#{window.encodeURI(window.location.href + '#discussion')}">logged in</a>
to post a comment.
</p>
</t>
<t t-if="widget.options['display_composer']">
<div class="media">
<div class="media-left">
<img class="o_portal_chatter_avatar pull-left" t-attf-src="/web/image/res.partner/#{widget.options['partner_id']}/image_small/50x50"/>
</div>
<div class="media-body">
<form class="o_portal_chatter_composer_form" method="POST" t-attf-action="/mail/chatter_post">
<input name="csrf_token" t-att-value="widget.options['csrf_token']" type="hidden"/>
<div class="mb32">
<textarea class="form-control" name="message" placeholder="Write a message..." rows="4"/>
<input name="res_model" t-att-value="widget.options['res_model']" type="hidden"/>
<input name="res_id" t-att-value="widget.options['res_id']" type="hidden"/>
<input name="token" t-att-value="widget.options['token']" t-if="widget.options['token']" type="hidden"/>
<input name="sha_in" t-att-value="widget.options['sha_in']" t-if="widget.options['sha_in']" type="hidden"/>
<input name="sha_time" t-att-value="widget.options['sha_time']" t-if="widget.options['sha_time']" type="hidden"/>
<div class="alert alert-danger mt8 mb0 o_portal_chatter_composer_error" style="display:none;">
Oops! Something went wrong. Try to reload the page and log in.
</div>
<button t-attf-class="o_portal_chatter_composer_btn btn btn-primary mt8 o_website_message_post_helper" type="submit">Send</button>
</div>
</form>
</div>
</div>
</t>
<hr/>
</div>
</t>
<t t-name="portal.chatter_messages">
<div class="o_portal_chatter_messages">
<t t-as="message" t-foreach="widget.get('messages')">
<div class="media o_portal_chatter_message" t-att-id="'message-' + message.id">
<div class="media-left">
<img alt="avatar" class="media-object o_portal_chatter_avatar" t-att-src="message.author_avatar_url"/>
</div>
<div class="media-body">
<div class="o_portal_chatter_message_title">
<h5 class="media-heading">
<t t-esc="message.author_id[1]"/>
</h5>
<p class="o_portal_chatter_puslished_date">
<t t-esc="message.published_date_str"/>
</p>
</div>
<t t-raw="message.body"/>
<div class="o_portal_chatter_attachments">
<div class="col-md-2 col-sm-3 text-center" t-as="attachment" t-foreach="message.attachment_ids">
<a t-attf-href="/web/content/#{attachment.id}?download=true" target="_blank">
<div class="oe_attachment_embedded o_image" t-att-data-mimetype="attachment.mimetype" t-att-title="attachment.name" t-attf-data-src="/web/image/#{attachment.id}/100x80"/>
<div class="oe_attachment_name">
<t t-raw="attachment.name"/>
</div>
</a>
</div>
</div>
</div>
</div>
</t>
</div>
</t>
<t t-name="portal.pager">
<div class="o_portal_chatter_pager">
<t t-if="!_.isEmpty(widget.get('pager'))">
<ul class="pagination" t-if="widget.get('pager')['pages'].length > 1">
<li class="o_portal_chatter_pager_btn" t-att-data-page="widget.get('pager')['page_previous']" t-if="widget.get('pager')['page'] != widget.get('pager')['page_previous']">
<a href="#">
<i class="fa fa-chevron-left"/>
</a>
</li>
<t t-as="page" t-foreach="widget.get('pager')['pages']">
<li t-att-class="page == widget.get('pager')['page'] ? 'o_portal_chatter_pager_btn active' : 'o_portal_chatter_pager_btn'" t-att-data-page="page">
<a href="#">
<t t-esc="page"/>
</a>
</li>
</t>
<li class="o_portal_chatter_pager_btn" t-att-data-page="widget.get('pager')['page_next']" t-if="widget.get('pager')['page'] != widget.get('pager')['page_next']">
<a href="#">
<i class="fa fa-chevron-right"/>
</a>
</li>
</ul>
</t>
</div>
</t>
<t t-name="portal.chatter">
<div class="o_portal_chatter">
<div class="o_portal_chatter_header">
<t t-call="portal.chatter_message_count"/>
</div>
<hr/>
<t t-call="portal.chatter_composer"/>
<t t-call="portal.chatter_messages"/>
<div class="o_portal_chatter_footer">
<t t-call="portal.pager"/>
</div>
</div>
</t>
<t t-name="portal.portal_signature">
<form id="o_portal_sign_accept" method="POST">
<input name="csrf_token" t-att-value="widget.options.csrf_token" type="hidden"/>
<div class="form-group">
<label class="control-label" for="name">Your Name</label>
<input class="form-control" id="o_portal_sign_name" name="partner_name" t-att-value="widget.options.partnerName" type="text"/>
</div>
<div class="panel panel-default mt16 mb0" id="o_portal_sign_draw">
<div class="panel-heading">
<div class="pull-right">
<a class="btn btn-xs" id="o_portal_sign_clear">Clear</a>
</div>
<strong>Draw your signature</strong>
</div>
<div class="panel-body" id="o_portal_signature" style="padding: 0"/>
</div>
<div class="mt16 clearfix">
<button class="btn btn-primary o_portal_sign_submit pull-right" type="submit">
<t t-esc="widget.options.signLabel or 'Accept & Sign'"/>
</button>
</div>
</form>
</t>
<t t-name="portal.portal_signature_success">
<div class="alert alert-success" role="alert">
<strong>Thank You !</strong>
<br/>
<span t-esc="widget.success"/>
<a t-att-href="widget.redirect_url">Click here to see your document.</a>
</div>
</t>
<t t-name="project.SetCoverModal">
<div class="ml32 mr0 o_kanban_task_cover_container" t-if="attachment_ids.length > 0">
<t t-as="attachment" t-foreach="attachment_ids">
<div t-attf-class="o_kanban_task_cover_image#{cover_id == attachment['id'] ? ' o_selected' : ''}">
<img t-att-data-id="attachment['id']" t-att-data-name="attachment['name']" t-attf-src="/web/image/#{attachment['id']}?unique=1"/>
</div>
</t>
</div>
<div t-if="attachment_ids.length == 0">There is no available image to be set as cover.</div>
<span class="hide">
<t t-call="HiddenInputFile">
<t t-set="fileupload_id" t-value="widget.imageUploadID"/>
<t t-set="fileupload_action" t-translation="off">/web/binary/upload_attachment</t>
<input name="model" t-att-value="widget.modelName" type="hidden"/>
<input name="id" t-att-value="widget.id" type="hidden"/>
<input name="session_id" t-att-value="widget.getSession().session_id" type="hidden"/>
</t>
</span>
</t>
<t t-name="stockReports.buttons">
<button class="btn btn-primary btn-sm o_stock-widget-pdf" type="button">PRINT</button>
</t>
<div aria-hidden="true" class="modal" data-backdrop="static" id="editable_error" role="dialog" style="z-index:9999;" t-name="stockReports.errorModal" tabindex="-1">
<div class="modal-dialog modal-sm">
<div class="modal-content">
<div class="modal-header">
<button aria-hidden="true" class="close" data-dismiss="modal" type="button">×</button>
<h3 class="modal-title">Error</h3>
</div>
<div class="modal-body">
<p class="text-center" id="insert_error"/>
</div>
</div>
</div>
</div>
<t t-name="mrp.button">
<button class="btn btn-primary btn-sm o_mrp_bom_print" type="button">print</button>
<button class="btn btn-primary btn-sm ml8 o_mrp_bom_print_unfolded" type="button">print unfolded</button>
</t>
<form class="form-inline" t-name="mrp.report_bom_search">
<div class="form-group col-md-4">
<label>Quantity:</label>
<div class="row">
<div class="col-md-6">
<input class="o_input o_mrp_bom_report_qty" min="1" t-att-value="bom_qty" type="number"/>
</div>
<div class="col-md-6">
<t t-esc="bom_uom_name" t-if="is_uom_applied"/>
</div>
</div>
</div>
<div class="form-group col-md-4" t-if="is_variant_applied">
<label>Variant:</label>
<select class="o_input o_mrp_bom_report_variants">
<option t-as="variant" t-att-value="variant" t-foreach="variants">
<t t-esc="variants[variant]"/>
</option>
</select>
</div>
<div t-attf-class="form-group #{is_variant_applied ? 'col-md-4' : 'col-md-8'}">
<label>Report:</label>
<select class="o_input o_mrp_bom_report_type">
<option t-att-data-type="'all'">BoM Structure & Cost</option>
<option t-att-data-type="'bom_structure'">BoM Structure</option>
<option t-att-data-type="'bom_cost'">BoM Cost</option>
</select>
</div>
</form>
<div class="o_reconciliation" t-name="reconciliation">
<div class="o_form_view">
<div class="o_form_sheet_bg">
<div class="o_form_sheet"/>
</div>
</div>
</div>
<t t-name="reconciliation.statement">
<div t-if="widget._initialState.valuemax">
<div>
<t t-if="widget._initialState.bank_statement_id">
<h1 class="statement_name editable" title="Click to Rename"/>
</t>
<t t-else="">
<h1 class="statement_name"/>
</t>
<h1 class="statement_name_edition" style="display: none;"/>
<div class="progress progress-striped">
<div class="progress-text">
<span class="valuenow">
<t t-esc="widget._initialState.valuenow"/>
</span>
/
<span class="valuemax">
<t t-esc="widget._initialState.valuemax"/>
</span>
</div>
<div aria-valuemin="0" class="progress-bar" role="progressbar" style="width: 0%;" t-att-aria-valuemax="widget._initialState.valuemax" t-att-aria-valuenow="widget._initialState.valuenow"/>
</div>
<button class="btn btn-default o_automatic_reconciliation pull-right" title="Let odoo try to reconcile entries for the user">Automatic reconciliation</button>
<div class="notification_area"/>
</div>
<div class="o_reconciliation_lines"/>
<div t-if="widget._initialState.valuemax > widget._initialState.defaultDisplayQty">
<button class="btn btn-default js_load_more">Load more</button>
</div>
<div class="pull-right text-muted">
Tip: Hit CTRL-Enter to reconcile all the balanced items in the sheet.
</div>
</div>
<div class="o_view_noreconciliation" t-else="">
<p>Nothing to do!</p>
<p>
This page displays all the bank transactions that are to be reconciled and provides with a neat interface to do so.
</p>
</div>
</t>
<t t-extend="reconciliation.statement" t-name="reconciliation.manual.statement">
<t t-jquery="div:first" t-operation="attributes">
<attribute name="class">o_manual_statement</attribute>
</t>
<t t-jquery="h1:last, .progress, .o_automatic_reconciliation" t-operation="replace"/>
<t t-jquery=".o_view_noreconciliation p" t-operation="replace"/>
<t t-jquery=".o_view_noreconciliation" t-operation="append">
<p>
<b>Good Job!</b>
There is nothing to reconcile.
</p>
<p>
All invoices and payments have been matched, your accounts' balances are clean.
</p>
</t>
</t>
<div class="done_message" t-name="reconciliation.done">
<h2>Congrats, you're all done!</h2>
<p>
You reconciled
<strong>
<t t-esc="number"/>
</strong>
transactions in
<strong>
<t t-esc="duration"/>
</strong>
.
<br/>
That's on average
<t t-esc="timePerTransaction"/>
seconds per transaction.
</p>
<t t-if="context && context.active_model">
<p class="actions_buttons" t-if="context['active_model'] === 'account.journal' || context['active_model'] === 'account.bank.statement'">
<t t-if="context.journal_id">
<button class="button_back_to_statement btn btn-default btn-sm" t-att-data_journal_id="context.journal_id">Go to bank statement(s)</button>
</t>
<t t-if="context['active_model'] === 'account.bank.statement'">
<button class="button_close_statement btn btn-primary btn-sm" style="display: inline-block;">Close statement</button>
</t>
</p>
</t>
</div>
<t t-name="reconciliation.line">
<t t-set="state" t-value="widget._initialState"/>
<div class="o_reconciliation_line" t-att-data-mode="state.mode">
<table class="accounting_view">
<caption>
<div class="pull-right o_buttons">
<button t-attf-class="o_validate btn btn-default btn-sm #{!state.balance.type ? '' : 'hidden'}">Validate</button>
<button t-attf-class="o_reconcile btn btn-primary btn-sm #{state.balance.type > 0 ? '' : 'hidden'}">Reconcile</button>
<span t-attf-class="o_no_valid text-danger #{state.balance.type < 0 ? '' : 'hidden'}">Select a partner or choose a counterpart</span>
</div>
</caption>
<thead>
<tr>
<td class="cell_action">
<span class="toggle_match fa fa-cog"/>
</td>
<td class="cell_account_code">
<t t-esc="state.st_line.account_code"/>
</td>
<td class="cell_due_date">
<t t-esc="state.st_line.date"/>
</td>
<td class="cell_label">
<t t-esc="state.st_line.name" t-if="state.st_line.name"/>
<t t-if="state.st_line.amount_currency_str">
(
<t t-esc="state.st_line.amount_currency_str"/>
)
</t>
</td>
<td class="cell_left">
<t t-if="state.st_line.amount > 0">
<t t-raw="state.st_line.amount_str"/>
</t>
</td>
<td class="cell_right">
<t t-if="state.st_line.amount < 0">
<t t-raw="state.st_line.amount_str"/>
</t>
</td>
<td class="cell_info_popover"/>
</tr>
</thead>
<tbody>
<t t-as="line" t-foreach="state.reconciliation_proposition">
<t t-call="reconciliation.line.mv_line"/>
</t>
</tbody>
<tfoot>
<t t-call="reconciliation.line.balance"/>
</tfoot>
</table>
<div class="match">
<t t-call="reconciliation.line.match"/>
</div>
<div class="create"/>
</div>
</t>
<t t-extend="reconciliation.line" t-name="reconciliation.manual.line">
<t t-jquery=".o_buttons" t-operation="replace">
<div class="pull-right o_buttons">
<button t-attf-class="o_validate btn btn-default btn-sm #{!state.balance.type ? '' : 'hidden'}">Reconcile</button>
<button t-attf-class="o_reconcile btn btn-primary btn-sm #{state.balance.type > 0 ? '' : 'hidden'}">Reconcile</button>
<button t-attf-class="o_no_valid btn btn-default btn-sm #{state.balance.type < 0 ? '' : 'hidden'}">Skip</button>
</div>
</t>
<t t-jquery=".accounting_view tbody" t-operation="append">
<t t-if="!_.filter(state.reconciliation_proposition, {"display": true}).length">
<t t-set="line" t-value="{}"/>
<t t-call="reconciliation.line.mv_line"/>
</t>
</t>
<t t-jquery=".accounting_view thead tr" t-operation="replace">
<tr>
<td class="cell_action">
<span class="toggle_match fa fa-cog"/>
</td>
<td colspan="3">
<span/>
<span t-if="state.last_time_entries_checked">
Last Reconciliation:
<t t-esc="state.last_time_entries_checked"/>
</span>
</td>
<td colspan="2">
<t t-esc="state.st_line.account_code"/>
</td>
<td class="cell_info_popover"/>
</tr>
</t>
</t>
<t t-name="reconciliation.line.balance">
<tr t-if="state.balance.amount_currency && !(state.reconciliation_proposition[0] || {}).partial_reconcile">
<td class="cell_action">
<span class="toggle_create fa fa-play"/>
</td>
<td class="cell_account_code">
<t t-esc="state.balance.account_code"/>
</td>
<td class="cell_due_date"/>
<td class="cell_label">
<t t-if="state.st_line.partner_id">Open balance</t>
<t t-else="">Choose counterpart or Create Write-off</t>
</td>
<td class="cell_left">
<t t-if="state.balance.amount_currency < 0">
<span t-att-data-content="state.balance.amount_currency_str" t-attf-class="o_multi_currency o_multi_currency_color_#{state.balance.currency_id%8} line_info_button fa fa-money" t-if="state.balance.amount_currency_str"/>
<t t-raw="state.balance.amount_str"/>
</t>
</td>
<td class="cell_right">
<t t-if="state.balance.amount_currency > 0">
<span t-att-data-content="state.balance.amount_currency_str" t-attf-class="o_multi_currency o_multi_currency_color_#{state.balance.currency_id%8} line_info_button fa fa-money" t-if="state.balance.amount_currency_str"/>
<t t-raw="state.balance.amount_str"/>
</t>
</td>
<td class="cell_info_popover"/>
</tr>
</t>
<div t-name="reconciliation.line.match">
<div class="match_controls">
<input class="filter" placeholder="Filter..." type="text" value=""/>
<span class="pull-right fa fa-chevron-right disabled"/>
<span class="pull-right fa fa-chevron-left disabled"/>
</div>
<table>
<tbody> </tbody>
</table>
</div>
<div t-name="reconciliation.line.create">
<div class="quick_add">
<div class="btn-group btn-group-sm o_reconcile_models" t-if="state.reconcileModels">
<t t-as="reconcileModel" t-foreach="state.reconcileModels">
<button class="btn btn-primary" t-att-data-reconcile-model-id="reconcileModel.id">
<t t-esc="reconcileModel.name"/>
</button>
</t>
<p style="color: #bbb;" t-if="!state.reconcileModels.length">
To speed up reconciliation, define
<a class="reconcile_model_create" style="cursor: pointer;">reconciliation models</a>
.
</p>
</div>
<div class="dropdown pull-right">
<a data-toggle="dropdown" href="#">
<span class="fa fa-cog"/>
</a>
<ul aria-labelledby="Presets config" class="dropdown-menu dropdown-menu-right" role="menu">
<li>
<a class="reconcile_model_create" href="#">Create model</a>
</li>
<li>
<a class="reconcile_model_edit" href="#">Modify models</a>
</li>
</ul>
</div>
</div>
<table class="pull-left">
<tr class="create_account_id">
<td class="o_td_label">Account</td>
<td class="o_td_field"/>
</tr>
<tr class="create_tax_id">
<td class="o_td_label">Tax</td>
<td class="o_td_field"/>
</tr>
<tr class="create_analytic_account_id" groups="analytic.group_analytic_accounting">
<td class="o_td_label">Analytic Acc.</td>
<td class="o_td_field"/>
</tr>
<tr class="create_analytic_tag_ids" groups="analytic.group_analytic_tags">
<td class="o_td_label">Analytic Tags.</td>
<td class="o_td_field"/>
</tr>
</table>
<table class="pull-right">
<tbody>
<tr class="create_journal_id" style="display: none;">
<td class="o_td_label">Journal</td>
<td class="o_td_field"/>
</tr>
<tr class="create_label">
<td class="o_td_label">Label</td>
<td class="o_td_field"/>
</tr>
<tr class="create_amount">
<td class="o_td_label">Amount</td>
<td class="o_td_field"/>
</tr>
</tbody>
</table>
<div class="add_line_container">
<a class="add_line" t-att-style="!state.balance.amout ? 'display: none;' : null">
<i class="fa fa-plus-circle"/>
Save and New
</a>
</div>
</div>
<t t-name="reconciliation.line.mv_line">
<tr t-att-data-line-id="line.id" t-att-data-selected="selected" t-attf-class="mv_line #{line.already_paid ? ' already_reconciled' : ''} #{line.__invalid ? 'invalid' : ''} #{line.is_tax ? 'is_tax' : ''}" t-if="line.display !== false">
<td class="cell_action">
<span class="fa fa-add-remove"/>
</td>
<td class="cell_account_code">
<t t-esc="line.account_code"/>
</td>
<td class="cell_due_date">
<t t-esc="line.date_maturity === false ? line.date : line.date_maturity"/>
</td>
<td class="cell_label">
<t t-if="line.partner_id && line.partner_id !== state.st_line.partner_id">
<t t-if="line.partner_name.length">
<t t-esc="line.partner_name"/>
:
</t>
</t>
<t t-esc="line.label || line.name"/>
<t t-if="line.ref && line.ref.length"> : </t>
<t t-esc="line.ref"/>
</td>
<td class="cell_left">
<t t-if="line.amount < 0">
<span t-att-data-content="line.amount_currency_str" t-attf-class="o_multi_currency o_multi_currency_color_#{line.currency_id%8} line_info_button fa fa-money" t-if="line.amount_currency_str"/>
<t t-raw="line.amount_str"/>
</t>
</td>
<td class="cell_right">
<t t-if="line.amount > 0">
<span t-att-data-content="line.amount_currency_str" t-attf-class="o_multi_currency o_multi_currency_color_#{line.currency_id%8} line_info_button fa fa-money" t-if="line.amount_currency_str"/>
<t t-raw="line.amount_str"/>
</t>
</td>
<td class="cell_info_popover"/>
</tr>
</t>
<t t-name="reconciliation.line.mv_line.details">
<table class="details">
<tr t-if="line.account_code">
<td>Account</td>
<td>
<t t-esc="line.account_code"/>
<t t-esc="line.account_name"/>
</td>
</tr>
<tr>
<td>Journal</td>
<td>
<t t-esc="line.journal_id[1]"/>
</td>
</tr>
<tr>
<td>Label</td>
<td>
<t t-esc="line.label"/>
</td>
</tr>
<tr t-if="line.ref">
<td>Ref</td>
<td>
<t t-esc="line.ref"/>
</td>
</tr>
<tr t-if="line.partner_id">
<td>Partner</td>
<td>
<t t-esc="line.partner_name"/>
</td>
</tr>
<tr>
<td>Date</td>
<td>
<t t-esc="line.date"/>
</td>
</tr>
<tr>
<td>Due Date</td>
<td>
<t t-esc="line.date_maturity === false ? line.date : line.date_maturity"/>
</td>
</tr>
<tr>
<td>Amount</td>
<td>
<t t-raw="line.total_amount_str"/>
<t t-if="line.total_amount_currency_str">
(
<t t-esc="line.total_amount_currency_str"/>
)
</t>
</td>
</tr>
<tr t-if="line.is_partially_reconciled">
<td>Residual</td>
<td>
<t t-raw="line.amount_str"/>
<t t-if="line.amount_currency_str">
(
<t t-esc="line.amount_currency_str"/>
)
</t>
</td>
</tr>
<tr class="one_line_info" t-if="line.already_paid">
<td colspan="2">This payment is registered but not reconciled.</td>
</tr>
</table>
</t>
<t t-name="reconciliation.line.statement_line.details">
<table class="details">
<tr>
<td>Date</td>
<td>
<t t-esc="state.st_line.date"/>
</td>
</tr>
<tr t-if="state.st_line.partner_name">
<td>Partner</td>
<td>
<t t-esc="state.st_line.partner_name"/>
</td>
</tr>
<tr t-if="state.st_line.ref">
<td>Transaction</td>
<td>
<t t-esc="state.st_line.ref"/>
</td>
</tr>
<tr>
<td>Description</td>
<td>
<t t-esc="state.st_line.name"/>
</td>
</tr>
<tr>
<td>Amount</td>
<td>
<t t-raw="state.st_line.amount_str"/>
<t t-if="state.st_line.amount_currency_str">
(
<t t-esc="state.st_line.amount_currency_str"/>
)
</t>
</td>
</tr>
<tr>
<td>Account</td>
<td>
<t t-esc="state.st_line.account_code"/>
<t t-esc="state.st_line.account_name"/>
</td>
</tr>
<tr t-if="state.st_line.note">
<td>Note</td>
<td style="white-space: pre;">
<t t-esc="state.st_line.note"/>
</td>
</tr>
</table>
</t>
<t t-name="reconciliation.notification">
<div role="alert" t-att-class="'notification alert-dismissible alert alert-' + type">
<button class="close" data-dismiss="alert" type="button">
<span aria-hidden="true" class="fa fa-times"/>
<span class="sr-only">Close</span>
</button>
<t t-esc="message"/>
<t t-if="details !== undefined">
<a class="fa fa-external-link" href="#" rel="do_action" t-att-data-action_name="details.name" t-att-data-ids="details.ids" t-att-data-model="details.model"> </a>
</t>
</div>
</t>
<t t-name="ShowPaymentInfo">
<div>
<t t-if="outstanding">
<div>
<strong class="pull-left" id="outstanding">
<t t-esc="title"/>
</strong>
</div>
</t>
<table style="width:100%;">
<t t-as="line" t-foreach="lines">
<tr>
<t t-if="outstanding">
<td>
<a class="oe_form_field outstanding_credit_assign" role="button" style="margin-right: 10px;" t-att-data-id="line.id" title="assign to invoice">Add</a>
</td>
<td>
<span class="oe_form_field" style="margin-right: 30px;">
<t t-esc="line.journal_name"/>
</span>
</td>
</t>
<t t-if="!outstanding">
<td>
<a class="js_payment_info fa fa-info-circle" role="button" style="margin-right:5px;" t-att-index="line.index" tabindex="0"/>
</td>
<td>
<i class="o_field_widget text-right o_payment_label">
Paid on
<t t-esc="line.date"/>
</i>
</td>
</t>
<td style="text-align:right;">
<span class="oe_form_field oe_form_field_float oe_form_field_monetary" style="margin-left: -10px;">
<t t-if="line.position === 'before'">
<t t-esc="line.currency"/>
</t>
<t t-esc="line.amount"/>
<t t-if="line.position === 'after'">
<t t-esc="line.currency"/>
</t>
</span>
</td>
</tr>
</t>
</table>
</div>
</t>
<t t-name="PaymentPopOver">
<div>
<table>
<tr>
<td>
<strong>Name: </strong>
</td>
<td style="text-align:right;">
<t t-esc="name"/>
</td>
</tr>
<tr>
<td>
<strong>Date: </strong>
</td>
<td style="text-align:right;">
<t t-esc="date"/>
</td>
</tr>
<tr>
<td>
<strong>Payment Method: </strong>
</td>
<td style="text-align:right;">
<t t-esc="journal_name"/>
</td>
</tr>
<tr>
<td>
<strong>Memo: </strong>
</td>
<td style="text-align:right;">
<t t-esc="ref"/>
</td>
</tr>
<tr>
<td>
<strong>Amount: </strong>
</td>
<td style="text-align:right;">
<t t-if="position === 'before'">
<t t-esc="currency"/>
</t>
<t t-esc="amount"/>
<t t-if="position === 'after'">
<t t-esc="currency"/>
</t>
</td>
</tr>
</table>
</div>
<button class="btn btn-xs btn-primary js_unreconcile_payment pull-left" style="margin-top:5px; margin-bottom:5px;" t-att-payment-id="payment_id">Unreconcile</button>
<button class="btn btn-xs btn-default js_open_payment pull-right" style="margin-top:5px; margin-bottom:5px;" t-att-invoice-id="invoice_id" t-att-move-id="move_id" t-att-payment-id="account_payment_id">View</button>
</t>
<t t-name="account.AccountDashboardSetupBar">
<div class="o_account_dashboard_header hidden-xs o_form_view" t-if="values['show_setup_bar']">
<div class="o_form_statusbar">
<div class="o_statusbar_status" data-original-title="" title="">
<button name="setting_opening_move_action" t-attf-class="btn btn-sm o_arrow_button btn-default account_setup_dashboard_action #{values['initial_balance'] and 'o_action_done' or ''}" type="company_object">
<i class="fa fa-check" t-if="values['initial_balance']"/>
<b class="o_account_dashboard_index">5</b>
Initial Balances
</button>
<button name="setting_chart_of_accounts_action" t-attf-class="btn btn-sm o_arrow_button btn-default account_setup_dashboard_action #{values['chart_of_accounts'] and 'o_action_done' or ''}" type="company_object">
<i class="fa fa-check" t-if="values['chart_of_accounts']"/>
<b class="o_account_dashboard_index">4</b>
Chart of Accounts
</button>
<button name="setting_init_fiscal_year_action" t-attf-class="btn btn-sm o_arrow_button btn-default account_setup_dashboard_action #{values['fiscal_year'] and 'o_action_done' or ''}" type="company_object">
<i class="fa fa-check" t-if="values['fiscal_year']"/>
<b class="o_account_dashboard_index">3</b>
Fiscal Year
</button>
<button name="setting_init_bank_account_action" t-attf-class="btn btn-sm o_arrow_button btn-default account_setup_dashboard_action #{values['bank'] and 'o_action_done' or ''}" type="company_object">
<i class="fa fa-check" t-if="values['bank']"/>
<b class="o_account_dashboard_index">2</b>
Bank Accounts
</button>
<button name="setting_init_company_action" t-attf-class="btn btn-sm o_arrow_button btn-default account_setup_dashboard_action #{values['company'] and 'o_action_done' or ''}" type="company_object">
<i class="fa fa-check" t-if="values['company']"/>
<b class="o_account_dashboard_index">1</b>
Company Data
</button>
<h4 class="text-muted">Configuration Steps</h4>
</div>
<div class="pull-right" style="padding: 7px 0;">
<button aria-hidden="true" class="account_setup_dashboard_action close" data-dismiss="modal" name="setting_hide_setup_bar" type="company_object">×</button>
</div>
</div>
</div>
</t>
<t t-name="CustomerStatements.buttons">
<div>
<button class="btn btn-primary btn-sm o_account_reports_followup_print_letter_button" type="button"> Print letter </button>
<button class="btn btn-primary btn-sm o_account_reports_followup_send_mail_button" type="button"> Send by email </button>
<button class="btn btn-default btn-sm o_account_reports_followup_do_it_later_button" data-toggle="tooltip" title="Odoo will remind you to take care of this follow-up on the next reminder date." type="button"> Remind me later </button>
<button class="btn btn-primary btn-sm o_account_reports_followup_done_button" style="display:none" type="button"> Done </button>
</div>
</t>
<t t-name="CustomerStatements.nothing_to_send">
<div class="alert alert-info" role="alert"> No followup to send! </div>
</t>
<t t-name="CustomerStatements.send_mail">
<div class="alert alert-info alert-dismissible" role="alert">
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">&times;</span>
</button>
The follow-up report was successfully emailed!
</div>
</t>
<div class="progress o_account-progress" data-toggle="tooltip" t-name="CustomerStatements.followupProgressbar" title="Follow-ups Done / Total Follow-ups">
<span class="show text-center o_account-progress-bar-content">
<t t-esc="current + '/' + max"/>
</span>
<div aria-valuemin="0" class="progress-bar" role="context" t-att-aria-valuemax="max" t-att-aria-valuenow="current" t-att-style="'width: ' + percent + '%;'"> </div>
</div>
<t t-name="accountReports.footnote_dialog">
<form role="form">
<textarea class="js_account_reports_footnote_note" name="note" placeholder="Insert foot note here" rows="4" t-att-data-line="id">
<t t-esc="text"/>
</textarea>
</form>
</t>
<t t-name="accountReports.buttons">
<t t-as="button" t-foreach="buttons">
<button class="btn btn-primary btn-sm" t-att-action="button.action" type="button">
<t t-esc="button.name"/>
</button>
</t>
</t>
<div t-name="paymentDateForm">
<form role="form">
<label for="expectedDate">Expected Payment Date</label>
<div class="o_account_reports_payment_date_picker"/>
<input id="target_id" t-att-value="target_id" type="hidden"/>
</form>
</div>
<t t-extend="mail.chat.ActivityMenuPreview">
<t t-jquery="t[t-foreach*='activities'][t-as*='activity']" t-operation="after">
<div class="o_note_show">
<a class="btn btn-block text-center">Add new note</a>
</div>
<div class="o_note o_mail_channel_preview hidden">
<div class="o_mail_channel_image o_mail_channel_app">
<img src="/note/static/description/icon.png"/>
</div>
<div class="o_channel_info">
<div class="o_channel_title">
<span class="o_channel_name">
<strong>Add a note</strong>
</span>
<div class="o_note_datetime"/>
<span class="ml4">
<a class="o_note_set_datetime text-muted">
<span class="fa fa-clock-o"/>
</a>
</span>
</div>
<div class="o_note_input_box">
<p>
<input class="o_note_input" placeholder="Remember..." type="text"/>
</p>
<span class="ml8 mr4">
<a class="o_note_save">SAVE</a>
</span>
</div>
</div>
</div>
</t>
</t>
<div class="o_stat_info published" t-name="WidgetWebsiteButton">
<span class="o_stat_text o_value"/>
<span class="o_stat_text">On Website</span>
</div>
<t t-name="website.WebsiteDashboardMain">
<div class="o_dashboards">
<div class="container-fluid o_website_dashboard">
<t t-call="website.dashboard_header"/>
<t t-call="website.dashboard_content"/>
</div>
</div>
</t>
<t t-name="website.dashboard_header">
<div class="row o_dashboard_common"/>
</t>
<t t-name="website.dashboard_content">
<div class="o_website_dashboard_content">
<div class="row o_dashboard_visits" t-if="widget.groups.website_designer">
<div class="col-xs-12 o_box">
<h2>Visits</h2>
<div t-if="widget.dashboards_data.visits && widget.dashboards_data.visits.ga_client_id">
<div class="row js_analytics_components"/>
<a class="js_link_analytics_settings" href="#">Edit my Analytics Client ID</a>
</div>
<div class="col-md-12" t-if="!(widget.dashboards_data.visits && widget.dashboards_data.visits.ga_client_id)">
<div class="o_demo_background">
<div class="o_layer"> </div>
<div class="o_buttons text-center">
<h3>There is no data currently available.</h3>
<button class="btn btn-sm btn-primary js_link_analytics_settings center-block mb8">Link my Analytics Account</button>
</div>
</div>
</div>
</div>
</div>
</div>
</t>
<div class="col-xs-12 js_unauthorized_message mb16" t-name="website.unauthorized_analytics">
<span t-if="reason === 'not_connected'">You need to log in to your Google Account before: </span>
<span t-if="reason === 'no_right'">
You do not seem to have access to this Analytics Account.
</span>
<span t-if="reason === 'not_initialized'">
Google Analytics initialization failed. Maybe this domain is not whitelisted in your Google Analytics project for this client ID.
</span>
</div>
<div t-name="website.ga_dialog_content">
Your Tracking ID:
<input name="ga_analytics_key" placeholder="UA-XXXXXXXX-Y" style="width: 100%" t-att-value="ga_analytics_key" type="text"/>
<a class="oe_link fa fa-arrow-right" href="https://www.odoo.com/documentation/user/online/website/optimize/google_analytics.html" target="_blank"> How to get my Tracking ID </a>
<br/>
<br/>
Your Client ID:
<input name="ga_client_id" style="width: 100%" t-att-value="ga_key" type="text"/>
<a class="oe_link fa fa-arrow-right" href="https://www.odoo.com/documentation/user/online/website/optimize/google_analytics_dashboard.html" target="_blank"> How to get my Client ID </a>
</div>
<t t-name="website.DateRangeButtons">
<div class="btn-group btn-group-sm o_date_range_buttons pull-right">
<button class="btn btn-sm btn-default js_date_range active" data-date="week">Last Week</button>
<button class="btn btn-sm btn-default js_date_range" data-date="month">Last Month</button>
<button class="btn btn-sm btn-default js_date_range" data-date="year">Last Year</button>
</div>
</t>
<t t-name="website.SalesChartTooltip">
<table>
<thead>
<tr>
<td colspan="3">
<strong>
<t t-esc="chartData.series[0].key"/>
</strong>
</td>
</tr>
</thead>
<tbody>
<tr>
<td class="legend-color-guide">
<div class="o_legend0"/>
</td>
<td class="key o_tooltip_key">
<t t-esc="format.date(moment(chartData.value))"/>
</td>
<td class="value">
<t t-esc="format.float(chartData.series[0].data[1])"/>
</td>
</tr>
<tr>
<td class="legend-color-guide">
<div class="o_legend1"/>
</td>
<td class="key o_tooltip_key">
<t t-esc="format.date(moment(chartData.value).subtract(1, dateRange))"/>
</td>
<td class="value">
<t t-esc="format.float(chartData.series[1].data[1])"/>
</td>
</tr>
</tbody>
</table>
</t>
<t t-name="website.GoToButtons">
<a class="btn btn-primary" href="/" title="Go to Website"> Go to Website </a>
</t>
<t t-name="website_mail.publish_short">
<t t-if="is_publisher" t-ignore="true">
<div t-att-data-controller="publish_controller" t-att-data-id="res_id" t-att-data-object="res_model" t-attf-class="pull-right js_publish_management #{object.website_published and 'css_published' or 'css_unpublished'}">
<button class="btn btn-danger js_publish_btn">Unpublished</button>
<button class="btn btn-success js_publish_btn">Published</button>
</div>
</t>
</t>
<t t-extend="portal.chatter_messages">
<t t-jquery=".o_portal_chatter_message_title" t-operation="before">
<t t-call="website_mail.publish_short">
<t t-set="res_model" t-value="'mail.message'"/>
<t t-set="res_id" t-value="message.id"/>
<t t-set="object" t-value="message"/>
<t t-set="is_publisher" t-value="widget.options['is_user_publisher']"/>
</t>
</t>
</t>
<t t-name="website_rating.rating_stars_static">
<t t-set="val_integer" t-value="Math.floor(val)"/>
<t t-set="val_decimal" t-value="val - val_integer"/>
<t t-set="empty_star" t-value="5 - (val_integer+Math.ceil(val_decimal))"/>
<div class="o_website_rating_static">
<t t-as="num" t-foreach="_.range(0, val_integer)">
<i class="fa fa-star"/>
</t>
<t t-if="val_decimal">
<i class="fa fa-star-half-o"/>
</t>
<t t-as="num" t-foreach="_.range(0, empty_star)">
<i class="fa fa-star-o"/>
</t>
</div>
</t>
<t t-name="website_rating.rating_card">
<div class="row o_website_rating_card_container">
<div class="col-md-3 col-md-offset-2" t-if="!_.isEmpty(widget.get('rating_card_values'))">
<p>
<strong>Average</strong>
</p>
<div class="o_website_rating_avg text-center">
<h1>
<t t-esc="widget.get('rating_card_values')['avg']"/>
</h1>
<t t-call="website_rating.rating_stars_static">
<t t-set="val" t-value="widget.get('rating_card_values')['avg'] || 0"/>
</t>
<t t-call="portal.chatter_message_count"/>
</div>
</div>
<div class="col-md-6" t-if="!_.isEmpty(widget.get('rating_card_values'))">
<p>
<strong>Details</strong>
</p>
<div class="o_website_rating_progress_bars">
<table class="o_website_rating_progress_table">
<t t-as="percent" t-foreach="widget.get('rating_card_values')['percent']">
<tr class="o_website_rating_select" style="opacity: 1" t-att-data-star="percent['num']">
<td class="o_website_rating_table_star_num" t-att-data-star="percent['num']">
<t t-esc="percent['num']"/>
stars
</td>
<td class="o_website_rating_table_progress">
<div class="progress">
<div aria-valuemax="100" aria-valuemin="0" class="progress-bar o_rating_progressbar" role="progressbar" t-att-aria-valuenow="percent['percent']" t-att-style="'width:' + percent['percent'] + '%;'"> </div>
</div>
</td>
<td class="o_website_rating_table_percent">
<strong>
<t t-esc="percent['percent']"/>
%
</strong>
</td>
<td class="o_website_rating_table_reset">
<span class="btn btn-link o_website_rating_select_text" t-att-data-star="percent['num']">Remove selection</span>
</td>
</tr>
</t>
</table>
</div>
</div>
</div>
</t>
<t t-name="website_rating.rating_star_input">
<div class="o_rating_star_card" t-if="widget.options['display_rating']">
<div class="stars enabled">
<i class="fa fa-star-o"/>
<i class="fa fa-star-o"/>
<i class="fa fa-star-o"/>
<i class="fa fa-star-o"/>
<i class="fa fa-star-o"/>
</div>
<div class="rate_text">
<span class="label label-info"/>
</div>
<input name="rating_value" readonly="readonly" type="hidden" value="0.0"/>
</div>
</t>
<t t-extend="portal.chatter_composer">
<t t-jquery=".o_portal_chatter_composer_form input[name='csrf_token']" t-operation="after">
<t t-call="website_rating.rating_star_input"/>
</t>
</t>
<t t-extend="portal.chatter_messages">
<t t-jquery="t[t-raw='message.body']" t-operation="before">
<t t-if="message['rating_value']">
<t t-call="website_rating.rating_stars_static">
<t t-set="val" t-value="message.rating_value"/>
</t>
</t>
</t>
</t>
<t t-extend="portal.chatter">
<t t-jquery="t[t-call='portal.chatter_message_count']" t-operation="replace">
<t t-if="widget.options['display_rating']">
<t t-call="website_rating.rating_card"/>
</t>
<t t-if="!widget.options['display_rating']">
<t t-call="portal.chatter_message_count"/>
</t>
</t>
</t>
<t t-extend="reconciliation" t-name="bank_statement_reconciliation">
<t t-jquery="h1" t-operation="replace">
<t t-if="single_statement">
<h1 class="statement_name">
<span>
<t t-esc="title"/>
</span>
<table class="change_statement_name_container oe_form o_form">
<tr>
<td>
<input class="change_statement_name_field" type="text"/>
</td>
<td>
<button class="change_statement_name_button btn btn-primary btn-sm">OK</button>
</td>
</tr>
</table>
</h1>
</t>
<t t-if="!single_statement">
<h1>
<t t-esc="title"/>
</h1>
</t>
</t>
</t>
<t t-extend="website.dashboard_header">
<t t-jquery="div.o_dashboard_common" t-operation="append">
<div class="o_box" t-if="widget.dashboards_data.sales.summary.order_unpaid_count || widget.dashboards_data.sales.summary.order_to_invoice_count || widget.dashboards_data.sales.summary.payment_to_capture_count || widget.dashboards_data.sales.summary.order_carts_abandoned_count">
<div class="o_inner_box o_dashboard_action" name="website_sale.action_unpaid_orders_ecommerce" t-if="widget.dashboards_data.sales.summary.order_unpaid_count" title="Confirm orders when you get paid.">
<div class="o_highlight">
<t t-esc="widget.dashboards_data.sales.summary.order_unpaid_count"/>
</div>
Unpaid Orders
</div>
<div class="o_inner_box o_dashboard_action" name="website_sale.sale_order_action_to_invoice" t-if="widget.dashboards_data.sales.summary.order_to_invoice_count" title="Generate an invoice from orders ready for invoicing.">
<div class="o_highlight">
<t t-esc="widget.dashboards_data.sales.summary.order_to_invoice_count"/>
</div>
Orders to Invoice
</div>
<div class="o_inner_box o_dashboard_action" name="website_sale.payment_transaction_action_payments_to_capture" t-if="widget.dashboards_data.sales.summary.payment_to_capture_count" title="Capture order payments when the delivery is completed.">
<div class="o_highlight">
<t t-esc="widget.dashboards_data.sales.summary.payment_to_capture_count"/>
</div>
Payments to Capture
</div>
<div class="o_inner_box o_dashboard_action" name="website_sale.action_abandoned_orders_ecommerce" t-if="widget.dashboards_data.sales.summary.order_carts_abandoned_count" title="Send a recovery email to visitors who haven't completed their order.">
<div class="o_highlight">
<t t-esc="widget.dashboards_data.sales.summary.order_carts_abandoned_count"/>
</div>
Abandoned Carts
</div>
</div>
</t>
</t>
<t t-extend="website.dashboard_content">
<t t-jquery="div.o_website_dashboard_content" t-operation="prepend">
<div class="row o_dashboard_sales" t-if="widget.groups.sale_salesman">
<div class="col-xs-12 o_box">
<t t-if="widget.dashboards_data.sales.summary.order_count">
<t t-if="widget.date_range">
<h2>
Sales Since Last
<t t-esc="widget.date_range"/>
</h2>
</t>
<t t-else="">
<h2>Sales</h2>
</t>
<div class="col-md-7 col-xs-12">
<div class="o_graph_sales" data-type="sales"/>
</div>
<div class="col-md-5 col-xs-12">
<t t-call="website_sale.products_table"/>
</div>
</t>
<t t-if="! widget.dashboards_data.sales.summary.order_count">
<t t-if="widget.date_range">
<h2>
Sales Since Last
<t t-esc="widget.date_range"/>
</h2>
</t>
<t t-else="">
<h2>Sales</h2>
</t>
<div class="col-md-12 col-xs-12">
<div class="o_demo_background"> </div>
<div class="o_demo_message">
<h3>There is no recent confirmed order.</h3>
</div>
</div>
</t>
</div>
</div>
</t>
</t>
<t t-name="website_sale.products_table">
<div class="row">
<div class="col-md-12 col-xs-12">
<div class="row">
<div class="col-md-12 col-xs-12">
<h4>AT A GLANCE</h4>
<a class="o_dashboard_action" href="#" name="website_sale.sale_report_action_dashboard">
<div class="col-sm-4 o_link_enable" title="Orders">
<div class="o_highlight">
<t t-esc="widget.dashboards_data.sales.summary.order_count"/>
</div>
Orders
</div>
</a>
<a class="o_dashboard_action" href="#" name="website_sale.sale_report_action_dashboard">
<div class="col-sm-4 o_link_enable" title="Untaxed Total Sold">
<div class="o_highlight">
<t t-esc="widget.render_monetary_field(widget.dashboards_data.sales.summary.total_sold, widget.data.currency)"/>
</div>
Sold
</div>
</a>
<a class="o_dashboard_action" href="#" name="website_sale.sale_report_action_carts">
<div class="col-sm-4 o_link_enable o_invisible_border" title="Carts">
<div class="o_highlight">
<t t-esc="widget.dashboards_data.sales.summary.order_carts_count"/>
</div>
Carts
</div>
</a>
<div class="col-sm-4 o_link_disable" title="Orders/Day">
<div class="o_highlight">
<t t-esc="widget.dashboards_data.sales.summary.order_per_day_ratio"/>
</div>
Orders/Day
</div>
<div class="col-sm-4 o_link_disable" title="Average Order">
<div class="o_highlight">
<t t-esc="widget.render_monetary_field(widget.dashboards_data.sales.summary.order_sold_ratio, widget.data.currency)"/>
</div>
Average Order
</div>
<div class="col-sm-4 o_link_disable o_invisible_border" title="Conversion">
<div class="o_highlight">
<t t-esc="widget.format_number(widget.dashboards_data.sales.summary.order_convertion_pctg, 'float', [3, 2], '%')"/>
</div>
Conversion
</div>
</div>
</div>
</div>
<div class="col-md-12 col-xs-12 o_top_margin">
<div class="row">
<div class="col-md-12 col-xs-12">
<h4>Best Sellers</h4>
<table class="table table-responsive table-hover">
<tr>
<th>Product</th>
<th>Quantity</th>
<th>Sold</th>
</tr>
<tr class="o_product_template" t-as="product" t-att-data-product-id="product.id" t-foreach="widget.dashboards_data.sales.best_sellers">
<td>
<t t-esc="product.name"/>
</td>
<td>
<t t-esc="product.qty"/>
</td>
<td>
<t t-esc="widget.render_monetary_field(product.sales, widget.data.currency)"/>
</td>
</tr>
</table>
</div>
</div>
</div>
</div>
</t>
<t t-name="helpdesk.HelpdeskDashboard">
<div class="o_helpdesk_dashboard" t-if="show_demo or values">
<div t-attf-class="#{show_demo ? 'o_demo' : ''}">
<table class="table table-condensed">
<tr>
<td class="o_text">
<div class="o_highlight">My Tickets</div>
</td>
<td class="o_main" title="My open tickets">
<a class="o_dashboard_action" href="#" name="helpdesk.helpdesk_ticket_action_main">
<span class="o_highlight">
<t t-esc="values['my_all']['count']"/>
</span>
<br/>
Tickets
</a>
</td>
<td class="o_main" title="My high priority tickets">
<a class="o_dashboard_action" href="#" name="helpdesk.helpdesk_ticket_action_high_priorities">
<span class="o_highlight">
<t t-esc="values['my_high']['count']"/>
</span>
<br/>
High Priority (
<span class="fa fa-star" style="color: gold"/>
<span class="fa fa-star" style="color: gold"/>
)
</a>
</td>
<td class="o_main" title="My urgent tickets">
<a class="o_dashboard_action" href="#" name="helpdesk.helpdesk_ticket_action_urgent">
<span class="o_highlight">
<t t-esc="values['my_urgent']['count']"/>
</span>
<br/>
Urgent (
<span class="fa fa-star" style="color: gold"/>
<span class="fa fa-star" style="color: gold"/>
<span class="fa fa-star" style="color: gold"/>
)
</a>
</td>
</tr>
<tr>
<td class="o_text">Avg Open Hours</td>
<td class="o_main">
<a class="o_dashboard_action" href="#" name="helpdesk.helpdesk_ticket_action_dashboard">
<t t-esc="values['my_all']['hours']"/>
</a>
</td>
<td class="o_main">
<a class="o_dashboard_action" href="#" name="helpdesk.helpdesk_ticket_action_dashboard_high_priority">
<t t-esc="values['my_high']['hours']"/>
</a>
</td>
<td class="o_main">
<a class="o_dashboard_action" href="#" name="helpdesk.helpdesk_ticket_action_dashboard_urgent">
<t t-esc="values['my_urgent']['hours']"/>
</a>
</td>
</tr>
<tr>
<td class="o_text" t-if="success_rate_enable">SLA Failed</td>
<td t-att-class="(values['my_all']['failed'] ? 'o_warning' : 'o_main')" t-if="success_rate_enable" title="View failed tickets">
<a class="o_dashboard_action" data-extra="overdue" href="#" name="helpdesk.helpdesk_ticket_action_sla">
<t t-esc="values['my_all']['failed']"/>
</a>
</td>
<td t-att-class="(values['my_high']['failed'] ? 'o_warning' : 'o_main')" t-if="success_rate_enable" title="View high priority failed tickets">
<a class="o_dashboard_action" data-extra="overdue" href="#" name="helpdesk.helpdesk_ticket_action_sla_high">
<t t-esc="values['my_high']['failed']"/>
</a>
</td>
<td t-att-class="(values['my_urgent']['failed'] ? 'o_warning' : 'o_main')" t-if="success_rate_enable" title="View urgent failed tickets">
<a class="o_dashboard_action" data-extra="overdue" href="#" name="helpdesk.helpdesk_ticket_action_sla_urgent">
<t t-esc="values['my_urgent']['failed']"/>
</a>
</td>
</tr>
</table>
</div>
<div t-attf-class="#{show_demo ? 'o_demo' : ''}">
<table class="hidden-xs table table-condensed">
<tr>
<td class="o_text">
<div class="o_highlight">My Performance</div>
Today
</td>
<td t-att-class="(values and values['helpdesk_target_closed'] and values['today']['count'] >=values['helpdesk_target_closed'])?'o_main':'o_secondary'" title="Performance Report">
<a class="o_dashboard_action" href="#" name="helpdesk.helpdesk_ticket_action_close_analysis">
<span class="o_highlight">
<t t-esc="values['today']['count']"/>
</span>
<br/>
Closed Tickets
</a>
</td>
<td t-att-class="(values and values['helpdesk_target_rating'] and values['helpdesk_target_rating'] <= values['today']['rating'])?'o_main':'o_secondary'" t-if="rating_enable" title="Customer satisfaction analysis">
<a class="o_dashboard_action" href="#" name="helpdesk_rating_today" type="object">
<span class="o_highlight">
<t t-esc="values['today']['rating']"/>
/ 10
</span>
<br/>
Customer Rating
</a>
</td>
<td t-att-class="(values and values['helpdesk_target_success'] and values['helpdesk_target_success'] <= values['today']['success'])?'o_main':'o_secondary'" t-if="success_rate_enable" title="Performance Report">
<a class="o_dashboard_action" href="#" name="helpdesk.helpdesk_ticket_action_success">
<span class="o_highlight">
<t t-esc="values['today']['success']"/>
%
</span>
<br/>
Success Rate
</a>
</td>
</tr>
<tr>
<td class="o_text">Avg 7 days</td>
<td class="o_secondary">
<a class="o_dashboard_action" href="#" name="helpdesk.helpdesk_ticket_action_7days_analysis">
<t t-esc="values['7days']['count']"/>
</a>
</td>
<td class="o_secondary" t-if="rating_enable">
<a class="o_dashboard_action" href="#" name="helpdesk_rating_7days">
<t t-esc="values['7days']['rating']"/>
/ 10
</a>
</td>
<td class="o_secondary" t-if="success_rate_enable">
<a class="o_dashboard_action" href="#" name="helpdesk.helpdesk_ticket_action_7dayssuccess">
<t t-esc="values['7days']['success']"/>
%
</a>
</td>
</tr>
<tr>
<td class="o_text">Daily Target</td>
<td class="o_secondary">
<span class="o_target_to_set" name="helpdesk_target_closed" t-att-value="values['helpdesk_target_closed'] ? values['helpdesk_target_closed'] : undefined" t-if="!show_demo" title="Click to set">
<t t-if="values['helpdesk_target_closed']">
<t t-esc="values['helpdesk_target_closed']"/>
</t>
<t t-if="!values['helpdesk_target_closed']"> Click to set </t>
</span>
<span t-if="show_demo"> 100 </span>
</td>
<td class="o_secondary" t-if="rating_enable">
<span class="o_target_to_set" name="helpdesk_target_rating" t-att-value="values['helpdesk_target_rating'] ? values['helpdesk_target_rating'] : undefined" t-if="!show_demo" title="Click to set">
<t t-if="values['helpdesk_target_rating']">
<t t-esc="values['helpdesk_target_rating']"/>
</t>
<t t-if="!values['helpdesk_target_rating']"> Click to set </t>
</span>
<span t-if="show_demo"> 100 </span>
</td>
<td class="o_secondary" t-if="success_rate_enable">
<span class="o_target_to_set" name="helpdesk_target_success" t-att-value="values['helpdesk_target_success'] ? values['helpdesk_target_success'] : undefined" t-if="!show_demo" title="Click to set">
<t t-if="values['helpdesk_target_success']">
<t t-esc="values['helpdesk_target_success']"/>
</t>
<t t-if="!values['helpdesk_target_success']"> Click to set </t>
</span>
<span t-if="show_demo"> 100 </span>
</td>
</tr>
</table>
</div>
<div class="o_welcome_message" t-if="show_demo">
<div class="o_welcome_image">
<i class="fa fa-smile-o fa-5x"/>
</div>
<div class="o_welcome_content">
<br/>
<h4>
<strong>Ready to boost your customer service?</strong>
</h4>
<h4>
This dashboard will activate once you have created your first ticket.
</h4>
<t t-if="values['use_alias'] and values['alias_name'] and values['alias_domain']">
<h4>
Send an email to
<strong>
<a class="o_inline_link" t-attf-href="mailto:#{values['alias_name']}@#{values['alias_domain']}">
<t t-esc="values['alias_name']"/>
@
<t t-esc="values['alias_domain']"/>
</a>
</strong>
to create a ticket.
</h4>
</t>
</div>
</div>
</div>
</t>
<t t-name="ImportView">
<t t-set="_id" t-value="_.uniqueId('export')"/>
<form action="" class="oe_import" enctype="multipart/form-data" method="post">
<input name="csrf_token" t-att-value="csrf_token" type="hidden"/>
<input name="session_id" t-att-value="widget.session.session_id" type="hidden"/>
<input name="import_id" type="hidden"/>
<div class="oe_import_box col-sm-9">
<div class="col-sm-12">
<p>
Select a CSV or Excel file to import.
<a class="pull-right" href="https://www.odoo.com/documentation/user/11.0/general/base_import/import_faq.html" target="new">Help</a>
</p>
</div>
<div class="col-sm-10">
<div class="input-group">
<input class="oe_import_file_show form-control" placeholder="No file chosen..." type="text"/>
<span class="input-group-btn">
<label class="btn btn-primary" for="my-file-selector">
<input accept=".csv, .xls, .xlsx, .xlsm, .ods" class="oe_import_file" id="my-file-selector" id-attf-id="file_#{_id}" name="file" style="display:none;" type="file"/>
Load File
</label>
</span>
<span class="input-group-btn">
<button class="btn btn-default oe_import_file_reload" disabled="disabled" type="button">Reload File</button>
</span>
</div>
<div class="template-import mt24 hidden">
<h5>
<a class="import-link fa fa-download" href="#"/>
</h5>
</div>
</div>
<div class="oe_import_with_file col-sm-12">
<a class="oe_import_toggle" href="#"> Options…</a>
<div class="oe_import_toggled oe_import_options js_import_options col-sm-5">
<p t-as="option" t-foreach="widget.opts">
<label t-attf-for="#{option.name}_#{_id}">
<t t-esc="option.label"/>
</label>
<input t-att-value="option.value" t-attf-class="oe_import_#{option.name}" t-attf-id="#{option.name}_#{_id}"/>
</p>
</div>
<div class="oe_import_toggled oe_import_options col-sm-5">
<p t-as="option" t-foreach="widget.parse_opts">
<label t-attf-for="#{option.name}_#{_id}">
<t t-esc="option.label"/>
</label>
<input t-att-value="option.value" t-attf-class="oe_import_#{option.name}" t-attf-id="#{option.name}_#{_id}"/>
</p>
</div>
</div>
</div>
<div class="oe_import_with_file oe_padding col-sm-12">
<h2>Map your columns to import</h2>
<div class="oe_import_tracking" title="If the model uses openchatter, history tracking will set up subscriptions and send notifications during the import, but lead to a slower import.">
<input id="oe_import_tracking" type="checkbox"/>
<label for="oe_import_tracking"> Track history during import </label>
</div>
<div class="oe_import_deferparentstore" title="If the model uses parent/child relations, computing the parent / child relation occurs on every line, and lead to a slower import. Defering it can speed up import.">
<input checked="checked" id="oe_import_deferparentstore" type="checkbox"/>
<label for="oe_import_deferparentstore"> Defer parent/child computation </label>
</div>
<input checked="checked" class="oe_import_has_header" id="oe_import_has_header" type="checkbox"/>
<label for="oe_import_has_header">
The first row contains the label of the column
</label>
<input checked="checked" class="oe_import_advanced_mode" id="oe_import_advanced_mode" type="checkbox"/>
<label for="oe_import_advanced_mode">Show fields of relation fields (advanced)</label>
<p class="oe_import_noheaders">
If the file contains the column names, Odoo can try auto-detecting the field corresponding to the column. This makes imports simpler especially when the file has many columns.
</p>
<div class="oe_import_error_report"/>
<table class="table-striped table-bordered oe_import_grid"/>
</div>
</form>
</t>
<t t-name="ImportView.buttons">
<button class="btn btn-sm btn-primary o_import_button o_import_validate" disabled="disabled" type="button">Test Import</button>
<button class="btn btn-sm btn-default o_import_button o_import_import" disabled="disabled" type="button">Import</button>
<button class="btn btn-sm btn-default o_import_cancel" type="button">Cancel</button>
</t>
<t t-name="ImportView.preview">
<thead>
<tr class="oe_import_grid-header" t-if="headers">
<td class="oe_import_grid-cell" t-as="header" t-foreach="headers">
<t t-esc="header"/>
</td>
</tr>
<tr class="oe_import_fields">
<td t-as="column" t-foreach="preview[0]">
<input class="oe_import_match_field"/>
</td>
</tr>
</thead>
<tbody>
<tr class="oe_import_grid-row" t-as="row" t-foreach="preview">
<td class="oe_import_grid-cell" t-as="cell" t-foreach="row">
<t t-esc="cell"/>
</td>
</tr>
</tbody>
</t>
<t t-name="ImportView.preview.error">
<div class="oe_import_report oe_import_report_error">
<p>
Import preview failed due to:
<t t-esc="error"/>
.
</p>
<p>
For CSV files, the issue could be an incorrect encoding.
</p>
<p t-if="preview">Here is the start of the file we could not import:</p>
</div>
<pre t-if="preview">
<t t-esc="preview"/>
</pre>
</t>
<ul t-name="ImportView.error">
<li t-as="error" t-attf-class="oe_import_report oe_import_report_#{error_value[0].type}" t-foreach="errors">
<t t-call="ImportView.error.each">
<t t-set="error" t-value="error_value[0]"/>
</t>
<a class="oe_import_report_count" href="#" t-if="error_value.length gt 1">
<t t-esc="more(error_value.length - 1)"/>
</a>
<ul class="oe_import_report_more" t-if="error_value.length gt 1">
<li t-as="index" t-foreach="error_value.length - 1">
<t t-call="ImportView.error.each">
<t t-set="error" t-value="error_value[index + 1]"/>
</t>
</li>
</ul>
</li>
</ul>
<t t-name="ImportView.error.each">
<span class="oe_import_report_message">
<t t-esc="error.message"/>
</span>
<t t-esc="at(error.rows)" t-if="error.rows"/>
<t t-if="error.moreinfo" t-raw="info(error.moreinfo)"/>
</t>
<t t-name="ImportView.import_button">
<button class="btn btn-sm btn-default o_button_import" t-if="widget and widget.importEnabled" type="button"> Import </button>
</t>
<t t-extend="ListView.buttons">
<t t-jquery="button.o_list_button_add" t-operation="after">
<t t-call="ImportView.import_button"/>
</t>
</t>
<t t-extend="KanbanView.buttons">
<t t-jquery="button.o-kanban-button-new" t-operation="after">
<t t-call="ImportView.import_button"/>
</t>
</t>
<t t-name="OnlineSyncSearchBankTable">
<div>
<t t-if="institutions.length > 0">
<t t-as="inst" t-foreach="institutions">
<div class="row institutionLine">
<div class="col-xs-12">
<hr class="searchSeparator"/>
<div class="pointer js_institution" t-att-data-beta="inst.beta" t-att-data-inst-id="inst.institution_identifier" t-att-data-provider="inst.provider">
<div class="row">
<div class="col-xs-7 col-sm-7">
<h4>
<t t-esc="inst.name"/>
</h4>
</div>
<div class="col-xs-1 col-sm-1">
<h4>
<strong>
<t t-esc="inst.country"/>
</strong>
</h4>
</div>
<div class="col-sm-2 hidden-xs">
<t t-if="inst.picture">
<div class="inst_icon" t-att-style="'background-image: url('+inst.picture+')'"> </div>
</t>
</div>
<div class="col-sm-2 col-xs-3">
<t t-if="inst.beta">
<img class="img-responsive pull-right beta-img" src="/account_online_sync/static/src/img/beta_icon.png"/>
</t>
</div>
</div>
<div class="row hidden js_institution_detail" t-att-id="inst.institution_identifier">
<div class="col-xs-12">
<div class="border-info">
<div class="row">
<div class="col-sm-5 col-xs-12">
<h6 title="The third party provider used to synchronize with your account">
Provider:
<small>
<t t-esc="inst.provider"/>
</small>
</h6>
<h6 title="The country in which your institution is located">
Country:
<small>
<t t-esc="inst.country || 'US'"/>
</small>
</h6>
<h6 title="this id is used to identy the institution with our third party provider">
Online identifier:
<small>
<t t-esc="inst.institution_identifier"/>
</small>
</h6>
</div>
<t t-if="inst.site_url">
<div class="col-sm-7 col-xs-12">
<h6 title="Website of the institution">
Site URL:
<small class="wordbreak">
<a t-att-href="inst.site_url" target="_blank">
<t t-esc="inst.site_url"/>
</a>
</small>
</h6>
<h6 title="If you have a doubt wheter or not you've choosen the right institution. Try login in with your credentials at this url to see if it works">
Login URL:
<small class="wordbreak">
<a t-att-href="inst.login_url" target="_blank">
<t t-esc="inst.login_url"/>
</a>
</small>
</h6>
</div>
</t>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</t>
</t>
</div>
</t>
<t t-name="OnlineSyncSearchBankFooter">
<div>
<button class="btn btn-default js_select_institution hidden" disabled="true">Connect to institution</button>
<button class="btn btn-default js_cancel">Cancel</button>
</div>
</t>
<t t-name="OnlineSyncSearchBank">
<div class="o_inst_search">
<div class="pull-right" style="margin-bottom:10px;">
<input checked="checked" class="switch_country" id="country" name="country" t-att-value="widget.context.country" type="radio"/>
<label for="country" style="margin-right:10px;">
<t t-esc="widget.context.country_name"/>
</label>
<input class="switch_country" id="worldwide" name="country" type="radio" value="worldwide"/>
<label for="worldwide">Worldwide</label>
</div>
<div class="institution_search">
<form id="search_form" method="post" target="#">
<div class="input-group col-md-12 o_input_group">
<input aria-describedby="click_search_institution" autocomplete="off" class="o_input form-control o_input_search" id="search_institution" placeholder="Seach for a bank..." type="text">
<span class="input-group-addon o_input_icon" id="click_search_institution">
<i class="fa fa-search"/>
</span>
</input>
<input style="display: none;" type="submit"/>
</div>
</form>
</div>
<div class="favorite_institutions">
<div class="favorite_institutions_result">
<div class="row">
<t t-as="inst" t-foreach="widget.starred_inst">
<div class="col-md-3 col-sm-4 col-xs-6">
<div class="inst_panel pointer o_institution" t-att-data-inst-id="inst.institution_identifier" t-att-data-provider="inst.provider" t-att-style="'background-image: url('+inst.picture+')'" t-att-title="inst.name"> </div>
</div>
</t>
</div>
</div>
<div class="favorite_institutions_no_result hidden">
<div class="row">
<div class="col-xs-12 text-center no_result">
<span>
<i class="fa fa-university fa-2"/>
</span>
<h4>
Search through thousands
<br/>
of institutions
</h4>
</div>
</div>
</div>
</div>
<div class="institutions_search hidden">
<div class="institution_result"> </div>
<div class="institution_no_result hidden">
<div class="row">
<div class="col-xs-12 text-center no_result">
<span>
<i class="fa fa-search fa-2"/>
</span>
<h4>No results found!</h4>
<h6>
Search again through thousands
<br/>
of institutions
</h6>
</div>
</div>
</div>
</div>
</div>
</t>
<t t-name="PlaidLogin">
<div>
<div class="js_wait_updating_account alert alert-warning hidden" role="alert">
Please wait while we are updating your account... This process can take several minutes...
</div>
<form class="form-horizontal js_online_sync_form">
<t t-if="call=='init'">
<div class="form-group">
<label class="col-md-2">Login (*)</label>
<div class="col-md-4">
<input class="form-control js_plaid_login" type="text"/>
</div>
</div>
<div class="form-group">
<label class="col-md-2">Password (*)</label>
<div class="col-md-4">
<input class="form-control js_plaid_password" type="password"/>
</div>
</div>
<div class="form-group">
<label class="col-md-2">PIN</label>
<div class="col-md-4">
<input class="form-control js_plaid_pin" type="text"/>
</div>
</div>
</t>
<t t-if="call=='mfa'">
<t t-if="mfa.type == 'list'">
<div class="form-group">
<label class="col-sm-4">Select a method of verification</label>
<t t-as="choice" t-foreach="mfa.mfa">
<div class="radio col-sm-12">
<label>
<input name="mfa-selection" t-att-mask="choice.mask" t-att-value="choice.type" type="radio">
<t t-esc="choice.type"/>
(
<t t-esc="choice.mask"/>
)
</input>
</label>
</div>
</t>
</div>
</t>
<t t-if="mfa.type == 'questions' || mfa.type == 'selections'">
<div class="form-group">
<t t-as="q" t-foreach="mfa.mfa">
<label class="col-sm-12">
<t t-esc="q.question"/>
</label>
<t t-if="mfa.type == 'questions'">
<div class="col-sm-12">
<input class="form-control js_plaid_answer" optional="false" type="text"/>
</div>
</t>
<t t-if="mfa.type == 'selections'">
<div class="col-sm-12">
<select class="form-control js_plaid_answer" optional="false">
<t t-as="v" t-foreach="q.answers">
<option t-att-value="v">
<t t-esc="v"/>
</option>
</t>
</select>
</div>
</t>
</t>
</div>
</t>
<t t-if="mfa.type == 'device'">
<div class="form-group">
<label class="col-sm-12">
<t t-esc="mfa.mfa.message"/>
(Enter code in area below)
</label>
<div class="col-sm-3">
<input class="form-control js_plaid_answer" optional="false"/>
</div>
</div>
</t>
</t>
</form>
<div class="footer">
<t t-if="call=='init'">
<button class="js_process_next_step btn btn-primary" type="button">Continue</button>
</t>
<t t-if="call=='mfa'">
<button class="js_process_mfa_step btn btn-primary" type="button">Continue</button>
</t>
<button class="js_process_cancel btn btn-default" type="button">Cancel</button>
</div>
</div>
</t>
<t t-name="YodleeTemplateFooter">
<div>
<button class="btn btn-primary js_yodlee_continue">Continue</button>
</div>
</t>
<t t-name="YodleeTemplate">
<div>
<div>
<t t-if="widget.beta===true">
<div class="alert alert-warning" role="alert">
<p>
This institution is in
<strong>BETA</strong>
which means that it is currently in development and might not synchronize nor work correctly.
</p>
</div>
</t>
<h4>You will be redirected to Yodlee</h4>
<p>
In order to
<t t-if="widget.state==='add'">add</t>
<t t-if="widget.state==='refresh'">refresh</t>
<t t-if="widget.state==='edit'">edit</t>
your institution, we have to redirect you to a third party provider website.
</p>
<p>
Once the process will be done, you will be back on Odoo
</p>
</div>
<form class="hidden" id="yodleeForm" method="POST" t-att-action="widget.fastlinkUrl" target="_self">
<input name="app" type="text" value="10003600"/>
<input name="rsession" t-att-value="widget.userToken" type="text"/>
<input name="token" t-att-value="widget.accessTokens.value" type="text"/>
<input name="redirectReq" type="text" value="true"/>
<input name="extraParams" t-att-value="widget.callbackUrl" type="text"/>
<input name="Submit" type="submit"/>
</form>
</div>
</t>
<t t-name="DashboardMain">
<div class="container-fluid o_web_settings_dashboard">
<div class="row">
<div class="o_web_settings_dashboard_enterprise"/>
<div class="col-sm-12 o_web_settings_dashboard_container">
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 o_web_settings_dashboard_col">
<div class="text-center o_web_settings_dashboard_apps"/>
<div class="text-center o_web_settings_dashboard_translations"/>
</div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 o_web_settings_dashboard_col">
<div class="text-center o_web_settings_dashboard_invitations"/>
<div class="text-center o_web_settings_dashboard_company"/>
</div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 o_web_settings_dashboard_col">
<div class="text-center o_web_settings_dashboard_share"/>
</div>
</div>
</div>
</div>
</t>
<t t-name="DashboardApps">
<div class="text-center o_web_settings_dashboard_apps">
<i class="fa fa-cog fa-4x text-muted o_browse_apps" style="cursor: pointer;"/>
<div class="o_web_settings_dashboard_header">
<t t-set="installed_apps" t-value="widget.data.installed_apps"/>
<t t-if="installed_apps">
<t t-esc="installed_apps"/>
<t t-if="installed_apps == 1">Installed App</t>
<t t-if="installed_apps > 1">Installed Apps</t>
</t>
<t t-if="! installed_apps"> No app installed </t>
</div>
<div>
<a class="btn btn-primary btn-block o_browse_apps" role="button">
<strong>Browse Apps</strong>
</a>
</div>
<div class="o_web_settings_dashboard_pills">
<a class="pull-left" href="https://www.odoo.com/apps/modules" target="_blank">
<i class="fa fa-rocket fa-2x text-muted"/>
App store
</a>
<a class="pull-right" href="https://www.odoo.com/apps/themes" target="_blank">
<i class="fa fa-picture-o fa-2x text-muted"/>
Theme store
</a>
</div>
<div class="clearfix"/>
</div>
</t>
<t t-name="EmailBadge">
<span class="badge" t-as="email" t-foreach="emails">
<span class="o_badge_text">
<t t-esc="email"/>
</span>
<span class="fa fa-times o_badge_remove" role="button" title="Remove Email"/>
</span>
</t>
<t t-name="DashboardInvitations">
<div class="text-center o_web_settings_dashboard_invitations">
<i class="fa fa-users fa-4x text-muted o_web_settings_dashboard_access_rights" style="cursor: pointer;"/>
<div class="o_web_settings_dashboard_header">
<t t-set="active_users" t-value="widget.data.active_users"/>
<t t-set="pending_users" t-value="widget.data.pending_users"/>
<t t-if="active_users">
<t t-esc="active_users"/>
<t t-if="active_users <= 1"> Active User</t>
<t t-if="active_users > 1">Active Users</t>
</t>
</div>
<div class="text-center">
<a class="o_web_settings_dashboard_access_rights" href="#"> Manage access rights</a>
</div>
<hr/>
<div class="o_web_settings_dashboard_invitation_form">
<p>
<strong>Invite new users:</strong>
</p>
<input class="o_user_emails o_input mt8" placeholder="Enter e-mail addresses" type="text"/>
<button class="btn btn-primary btn-block o_web_settings_dashboard_invite mt16" data-loading-text="Inviting..." role="button">
<strong>Invite</strong>
</button>
</div>
<div class="o_web_settings_dashboard_pending_users mt8">
<t t-if="pending_users.length">
<p>
<strong>Pending invitations:</strong>
</p>
<span t-as="pending" t-foreach="pending_users">
<a class="badge o_web_settings_dashboard_user" href="#" t-att-data-user-id="pending[0]">
<t t-esc="pending[1]"/>
</a>
</span>
<t t-if="pending_users.length < widget.data.pending_count">
<br/>
<a class="o_web_settings_dashboard_more" href="#">
<t t-esc="widget.data.pending_count - pending_users.length"/>
more
</a>
</t>
</t>
</div>
</div>
</t>
<t t-name="DashboardShare">
<div class="text-center o_web_settings_dashboard_share">
<i class="fa fa-share-alt fa-4x text-muted"/>
<div class="o_web_settings_dashboard_header">Share the Love</div>
<div>
<small class="text-muted text-center o_web_settings_dashboard_compact_subtitle">
Help us spread the word: Share Odoo's awesomeness with your friends!
</small>
</div>
<div class="row mt16">
<div class="col-xs-4">
<a href="#">
<i class="fa fa-twitter-square fa-4x tw_share"/>
</a>
</div>
<div class="col-xs-4">
<a href="#">
<i class="fa fa-facebook-square fa-4x fb_share"/>
</a>
</div>
<div class="col-xs-4">
<a href="#">
<i class="fa fa-linkedin-square fa-4x li_share"/>
</a>
</div>
</div>
<hr/>
<t t-set="server_version" t-value="widget.data.server_version"/>
<t t-set="debug" t-value="widget.data.debug"/>
<div class="row">
<div class="text-center">
<div class="user-heading">
<h3>
Odoo
<t t-esc="server_version"/>
(Community Edition)
</h3>
</div>
<div>
<div class="tab-content">
<div class="tab-pane active text-muted text-center o_web_settings_dashboard_compact_subtitle" id="settings">
<small>
Copyright © 2004-2016
<a href="https://www.odoo.com" style="text-decoration: underline;" target="_blank">Odoo S.A.</a>
<a href="http://www.gnu.org/licenses/lgpl.html" style="text-decoration: underline;" target="_blank">GNU LGPL Licensed</a>
</small>
</div>
</div>
</div>
</div>
</div>
<hr/>
<div class="row">
<div class="col-md-12">
<a class="oe_activate_debug_mode pull-right" href="?debug" t-if="debug != true">Activate the developer mode</a>
<br t-if="debug != true"/>
<a class="oe_activate_debug_mode pull-right" href="?debug=assets" t-if="debug != 'assets'">Activate the developer mode (with assets)</a>
<br t-if="debug != 'assets'"/>
<a class="oe_activate_debug_mode pull-right" href="/web" t-if="debug != false">Deactivate the developer mode</a>
</div>
</div>
</div>
</t>
<t t-name="DashboardEnterprise">
<hr class="mt16"/>
<div class="text-center o_web_settings_dashboard_enterprise">
<div class="text-center o_web_settings_dashboard_enterprise">
<div class="text-center o_web_settings_dashboard_header">Odoo Enterprise</div>
<div class="mb16">
<a href="http://www.odoo.com/editions" target="_blank">Get more features with the Enterprise Edition!</a>
</div>
<div>
<img class="img img-responsive" t-att-src="_s + "/web/static/src/img/enterprise_upgrade.jpg""/>
</div>
<div>
<a class="btn btn-primary btn-block o_confirm_upgrade" role="button">
<strong>Upgrade Now</strong>
</a>
</div>
</div>
</div>
</t>
<t t-name="DashboardTranslations">
<div class="text-center o_web_settings_dashboard_translations mt8">
<i class="fa fa-globe fa-4x text-muted"/>
<div class="o_web_settings_dashboard_header"> Translations </div>
<div>
<small class="text-muted text-center o_web_settings_dashboard_compact_subtitle">
Send your documents in your partner's language or set up a language for your users
</small>
</div>
<div class="mt16">
<a class="btn btn-primary btn-block o_load_translations">
<strong>Load a Translation</strong>
</a>
</div>
</div>
</t>
<t t-name="DashboardCompany">
<div class="text-center o_web_settings_dashboard_company mt8">
<i class="fa fa-suitcase fa-4x text-muted"/>
<div class="o_web_settings_dashboard_header">
<t t-esc="widget.data.company_name"/>
</div>
<div>
<small class="text-muted text-center o_web_settings_dashboard_compact_subtitle"> Set up your company information </small>
</div>
<div class="mt16">
<a class="btn btn-primary btn-block o_setup_company">
<strong>Set Up</strong>
</a>
</div>
</div>
</t>
<t t-extend="UserMenu.Actions">
<t t-jquery="li:last" t-operation="after">
<li>
<a class="hidden" data-menu="shortcut" href="#">Add to Home Screen</a>
</li>
<li>
<a class="hidden" data-menu="switch" href="#"> Switch/Add Account</a>
</li>
</t>
</t>
<t t-extend="DashboardMain">
<t t-jquery=".o_web_settings_dashboard_apps" t-operation="after">
<div class="mt8 o_dashboard_mobile_store">
<a class="center-block" href="https://play.google.com/store/apps/details?id=com.odoo.mobile" target="_blank">
<img class="center-block img img-responsive" src="/web_mobile/static/src/img/logo_google_play.png"/>
</a>
</div>
</t>
</t>
<t t-name="ContactSync">
<div t-attf-class="btn btn-sm oe_stat_button" t-if="widget.is_mobile" widget="contact_sync">
<div class="fa fa-fw fa-user-plus o_button_icon mt8"> </div>
<div class="o_field_widget o_stat_info">
<span class="o_stat_value">Add to</span>
<span class="o_stat_value">Mobile</span>
</div>
</div>
</t>
<t name="Signature Item" t-name="website_sign.signature_item">
<t t-if="readonly">
<div class="o_sign_signature_item text-center" style="text-align: center;" t-att-data-signature="value" t-if="type == 'signature' || type == 'initial'">
<span class="o_sign_helper"/>
<img t-att-src="value" t-if="value"/>
<t t-if="!value">
<t t-esc="placeholder"/>
</t>
<t t-call="website_sign.signature_item_configuration" t-if="editMode"/>
</div>
<div class="o_sign_signature_item" t-if="type == 'text' || type == 'textarea'">
<t t-esc="value"/>
<t t-call="website_sign.signature_item_configuration" t-if="editMode"/>
</div>
</t>
<t t-if="!readonly">
<button class="o_sign_signature_item text-center" t-if="type == 'signature' || type == 'initial'">
<span class="o_sign_helper"/>
<t t-esc="placeholder"/>
</button>
<input class="o_sign_signature_item" t-att-placeholder="placeholder" t-if="type == 'text'" type="text"/>
<textarea class="o_sign_signature_item" t-att-placeholder="placeholder" t-if="type == 'textarea'"/>
</t>
</t>
<div class="o_sign_config_area" t-name="website_sign.signature_item_configuration">
<span class="fa fa-arrows"/>
<span class="o_sign_responsible_display"/>
</div>
<div class="o_sign_chatter" t-name="website_sign.chatter">
<div class="form-group" t-if="widget.sendAccess">
<textarea class="form-control" name="comment" placeholder="Send a note..." rows="3"/>
<hr/>
</div>
<ul class="media-list">
<t t-as="message" t-foreach="widget.messages">
<li class="media" t-if="message.message_type === 'comment'">
<div class="media-body">
<img class="media-object pull-left" t-att-src="message.author_id.avatar"/>
<div class="media-body">
<h5 class="media-heading">
<t t-esc="message.author_id.name"/>
<small>
on
<t t-esc="message.date"/>
</small>
</h5>
<div t-raw="message.body"/>
</div>
</div>
</li>
</t>
</ul>
</div>
<div class="form-horizontal" t-name="website_sign.signature_dialog">
<div class="o_sign_signer_info form-group">
<label class="col-md-3 control-label" for="name">Full Name</label>
<div class="col-md-9">
<input class="o_sign_signer_name form-control" name="signer" t-att-value="widget.signerName" type="text"/>
</div>
</div>
<div class="o_sign_signature_draw panel panel-default mt16 mb0">
<div class="panel-heading">
<a class="o_sign_select_style pull-right btn btn-link">Select Signature Style</a>
<a class="o_sign_clean pull-right btn btn-link">Clear Signature</a>
<input class="o_sign_load pull-right btn btn-link" name="files[]" type="file"/>
<a class="o_sign_mode btn btn-primary" data-mode="auto">Auto</a>
<a class="o_sign_mode btn" data-mode="draw">Draw</a>
<a class="o_sign_mode btn" data-mode="load">Load</a>
</div>
<div class="o_sign_signature panel-body"/>
</div>
<div class="mt16 small">
By clicking Adopt and Sign, I agree that the chosen signature/initials will be a valid electronic representation of my hand-written signature/initials for all purposes when it is used on documents, including legally binding contracts.
</div>
<div class="o_sign_font_dialog panel panel-default">
<div class="panel-heading">Styles</div>
<div class="o_sign_font_selection panel-body"/>
</div>
</div>
<t name="SVG Signature Text" t-name="website_sign.svg_text">
<svg t-att-height="height" t-att-width="width">
<defs>
<style type="text/css">
@font-face { font-family: "font"; src: url(data:font/ttf;base64,
<t t-esc="font"/>
) format("woff"); font-weight: normal; font-style: normal; }
</style>
</defs>
<text fill="black" style="font-family:'font'" t-att-font-size="height*4/5" t-att-lengthAdjust="'spacing' + ((type == 'signature')? 'AndGlyphs' : '')" t-att-textLength="width*4/5" t-att-y="height*4/5" text-anchor="middle" x="50%">
<t t-esc="text"/>
</text>
</svg>
</t>
<div class="form-horizontal" t-name="website_sign.public_signer_dialog">
<div class="form-group">
<label class="col-md-3 control-label" for="o_sign_public_signer_name_input">Your name</label>
<div class="col-md-9">
<input class="form-control" id="o_sign_public_signer_name_input" placeholder="Your name" type="text"/>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label" for="o_sign_public_signer_mail_input">Your email</label>
<div class="col-md-9">
<input class="form-control" id="o_sign_public_signer_mail_input" placeholder="Your email" type="email"/>
</div>
</div>
</div>
<div t-name="website_sign.thank_you_dialog">
<div class="o_thankyou_message">
We will let you know by email once everyone has signed.
<br/>
So you can close the window and come back later.
</div>
<div class="row o_promote_esign">
<div class="col-md-2">
<img alt="Document Sign" class="img img-responsive" src="/website_sign/static/description/icon.png"/>
</div>
<div class="col-md-10">
<h4>Do you also send documents to sign?</h4>
It's easy, incredibly efficient and totally free: you just have to create an Odoo account.
</div>
</div>
</div>
<div t-extend="website_sign.thank_you_dialog" t-name="website_sign.no_pub_thank_you_dialog">
<t t-jquery=".o_promote_esign" t-operation="replace"/>
</div>
<t t-name="website_sign.signature_item_custom_dialog">
<div>
<div class="form-group clearfix" groups="base.group_no_one">
<label class="col-md-2" for="o_sign_name">Field Name</label>
<div class="col-md-10">
<input class="o_input" id="o_sign_name" type="text"/>
</div>
</div>
<div class="form-group">
<label class="col-md-2" for="o_sign_responsible_select_input">Responsible</label>
<div class="o_sign_responsible_select col-md-10">
<select id="o_sign_responsible_select_input"/>
</div>
</div>
<div class="form-group">
<div class="col-md-offset-2 col-md-10">
<div class="checkbox">
<label for="o_sign_required_field">
<input id="o_sign_required_field" type="checkbox"/>
Mandatory field
</label>
</div>
</div>
</div>
</div>
</t>
<t t-name="website_sign.initial_all_pages_dialog">
<div class="form-group">
<label class="col-md-2" for="responsible_select_initials_input">Responsible</label>
<div class="o_sign_responsible_select_initials col-md-10">
<select id="responsible_select_initials_input"/>
</div>
</div>
</t>
<t t-name="website_sign.create_signature_request_dialog">
<div class="form-horizontal">
<p class="o_sign_warning_message_no_field">
<em>
If you leave your document without any fields, the signers will be requested for an unique signature alongside the document
</em>
</p>
<div class="o_sign_request_signers">
<div class="form-group">
<label class="col-md-3" for="o_sign_followers_select">Send a copy to</label>
<div class="col-md-9">
<input id="o_sign_followers_select" multiple="multiple" placeholder="Write email or search contact..." type="hidden"/>
</div>
</div>
</div>
<hr/>
<div class="form-group">
<label class="col-md-3" for="signature_request_subject_input">Subject</label>
<div class="col-md-9">
<input class="o_sign_subject_input o_input" placeholder="Signature Request" type="text"/>
</div>
</div>
<div class="form-group">
<label class="col-md-3" for="sign_message_textarea">Message</label>
<div class="col-md-9">
<textarea class="o_sign_message_textarea o_input" rows="4"/>
</div>
</div>
<div class="form-group">
<label class="col-md-3" for="sign_reference_input">Filename</label>
<div class="col-md-9">
<div class="input-group">
<input aria-describedby="o_sign_pdf_ext" class="o_sign_reference_input o_input" type="text"/>
<span class="input-group-addon" id="o_sign_pdf_ext">
<t t-esc="widget.attachment.datas_fname.substr(widget.attachment.datas_fname.lastIndexOf('.'))"/>
</span>
</div>
</div>
</div>
</div>
</t>
<t t-name="website_sign.share_template_dialog">
<div>
<p>
Share this link and Odoo will create a new document per person who clicks on the link. The link is private, only those that receive the link will be able to sign it.
</p>
<label class="col-md-3" for="o_sign_share_link_input">Link to Share</label>
<div class="col-md-9">
<input class="o_input" id="o_sign_share_link_input" readonly="readonly" type="text"/>
</div>
<p>
To be able to share, there must be only one responsible for all fields !
</p>
</div>
</t>
<div class="form-horizontal" t-name="website_sign.add_followers_dialog">
<div class="form-group">
<label class="col-md-3" for="o_sign_followers_select">Send a copy</label>
<div class="col-md-9">
<input id="o_sign_followers_select" multiple="multiple" placeholder="Write email or search contact..." type="hidden"/>
</div>
</div>
</div>
<t t-name="website_sign.template">
<div class="text-center clearfix">
<div class="o_sign_template_saved_info alert alert-success pull-right">
<span class="fa fa-check"/>
Saved
</div>
<span class="fa fa-pencil" t-if="!widget.has_signature_requests" title="Edit template name"/>
<input class="o_sign_template_name_input o_input" t-att-value="widget.signature_request_template.attachment_id.name" type="text"/>
</div>
<div class="text-center" t-if="widget.has_signature_requests && widget.isPDF">
This template is used by some signature requests. If you want to edit it,
<button class="o_sign_duplicate_signature_template btn btn-link" type="button">click here</button>
to start a new template from this one !
</div>
<div class="o_sign_image_document" t-if="!widget.isPDF">
<t t-set="webimage" t-value="new RegExp('image.*(gif|jpe|jpg|png)').test(widget.signature_request_template.attachment_id.mimetype)"/>
<img class="img img-responsive" t-attf-src="/web/image/{{widget.signature_request_template.attachment_id.id}}" t-if="webimage"/>
<div class="o_image" t-att-data-mimetype="widget.signature_request_template.attachment_id.mimetype" t-if="!webimage"/>
</div>
<iframe class="o_sign_pdf_iframe" t-if="widget.isPDF"/>
</t>
<t t-name="website_sign.type_buttons">
<t t-as="item_type" t-foreach="signature_item_types">
<button class="o_sign_field_type_button" t-att-data-item-type-id="item_type.id" title="Drag & Drop a field in the PDF" type="button">
<t t-esc="item_type.name"/>
</button>
</t>
</t>
<div t-name="iap.redirect_to_odoo_credit">
<t t-if="data.body">
<div t-raw="data.body"/>
</t>
<t t-if="!data.body">
<t t-if="data.message">
<span t-esc="data.message"/>
</t>
<t t-if="!data.message">
<span>Insufficient credit to perform this service.</span>
</t>
</t>
</div>
<t t-extend="DashboardApps">
<t t-jquery=".o_web_settings_dashboard_pills" t-operation="after">
<div class="text-center" style="display: inline-block">
<a t-att-href="widget.data.url" target="_blank">
<i class="fa fa-money fa-2x text-muted"/>
In-App Purchases
</a>
</div>
</t>
</t>
<div class="o_attachment_preview_container" t-name="AttachmentPreview">
<div class="o_attachment_preview_img" t-if="attachment.type == 'image'">
<a class="btn btn-link pull-right" t-att-href="attachment.url">
<i class="fa fa-download"/>
Download
</a>
<h3 class="mt0 mb16 text-muted">
<t t-esc="attachment.filename"/>
</h3>
<img class="img img-responsive" t-attf-src="/web/image/#{attachment.id}?unique=1"/>
</div>
<iframe class="mb48" t-attf-src="/web/static/lib/pdfjs/web/viewer.html?file=/web/content/#{attachment.id}" t-if="attachment.type == 'pdf'"/>
</div>
<t t-name="FieldPad">
<div class="oe_form_field_text oe_pad">
<p class="oe_unconfigured hidden">
Please enter your Etherpad credentials through the menu 'Settings > General Settings'.
</p>
<t t-if="widget.mode === 'readonly'">
<div class="oe_pad_content etherpad_readonly oe_configured"/>
</t>
<t t-if="widget.mode === 'edit'">
<div class="oe_pad_switch_positioner oe_configured">
<span class="fa fa-expand oe_pad_switch"/>
</div>
<div class="oe_pad_content oe_editing oe_configured"/>
</t>
</div>
</t>
<t t-name="grid.GridArrows">
<div>
<button class="btn btn-sm btn-primary o_grid_button_add" t-if="widget.allowCreate" type="button"> Add a Line </button>
<div class="btn-group btn-group-sm" t-if="widget._buttons.length">
<button t-as="btn" t-att-data-index="btn_index" t-attf-class="grid_arrow_button btn btn-sm {{ btn['class'] || 'btn-default' }}" t-foreach="widget._buttons" type="button">
<t t-esc="btn.string"/>
</button>
</div>
<button class="grid_arrow_previous btn btn-sm btn-primary hidden" type="button">
<span class="fa fa-arrow-left"/>
</button>
<button class="btn btn-sm btn-primary grid_button_initial hidden" type="button"> Today </button>
<button class="grid_arrow_next btn btn-sm btn-primary hidden" type="button">
<span class="fa fa-arrow-right"/>
</button>
<div class="btn-group btn-group-sm" t-if="widget._ranges.length > 1">
<button class="grid_arrow_range btn btn-sm btn-default" t-as="range" t-att-data-name="range.name" t-foreach="widget._ranges" type="button">
<t t-esc="range.string"/>
</button>
</div>
</div>
</t>
<t t-name="project_timesheet_synchro.demo">
<div class="o_form_view">
<div class="o_form_sheet_bg o_project_timesheet_app_bg">
<div class="row o_form_sheet">
<div class="col-md-6 mt16">
<div class="o_project_timesheet_app text-center hidden-xs"> </div>
<div class="text-center visible-xs">
<p>You can try the app in a new tab:</p>
<a class="btn btn-xl btn-primary" href="/project_timesheet_synchro/timesheet_app" target="_blank">Open the App</a>
</div>
</div>
<div class="o_project_timesheet_app_links col-md-6">
<div class="flex-container">
<h1>Your personal timesheets</h1>
<h3 class="text-muted">Use timesheet apps to manage your timesheets.</h3>
<div class="text-center mt32 mb32">
<a href="http://www.odoo.com/page/timesheet?platform=android" target="_blank">
<img alt="Google Play Store" class="mb8" src="project_timesheet_synchro/static/src/img/play_store.png"/>
</a>
<a href="http://www.odoo.com/page/timesheet?platform=chrome" target="_blank">
<img alt="Google Chrome Store" class="mb8" src="project_timesheet_synchro/static/src/img/chrome_store.png"/>
</a>
<a href="http://www.odoo.com/page/timesheet?platform=ios" target="_blank">
<img alt="Apple App Store" class="mb8" src="project_timesheet_synchro/static/src/img/app_store.png"/>
</a>
</div>
<ul class="list-unstyled fa-ul">
<li>
<h2>
<i class="fa fa-bolt fa-li"/>
Blazing Fast
</h2>
<p>
Work in disconnected mode and sync in the background.
</p>
</li>
<li>
<h2>
<i class="fa fa-bar-chart fa-li"/>
Statistics
</h2>
<p>Never lose track of what you need to do.</p>
</li>
<li>
<h2>
<i class="fa fa-plug fa-li"/>
Offline support
</h2>
<p>Work anywhere, anytime.</p>
</li>
<li>
<h2>
<i class="fa fa-check-square-o fa-li"/>
Get Things Done
</h2>
<p>Plan your day. Focus on important tasks.</p>
</li>
</ul>
<div class="text-center">
<div class="mb8 mt8">
<a href="http://www.odoo.com/page/timesheet" target="_blank">
<div class="btn btn-primary mb16">More info</div>
</a>
</div>
</div>
<h3 class="text-center text-muted">Available for iPhone, Android and Chrome.</h3>
</div>
</div>
</div>
</div>
</div>
</t>
<t t-name="CopyClipboardText">
<button class="btn btn-xs btn-primary o_clipboard_button o_btn_text_copy">
<i class="fa fa-clipboard"/>
Copy Text
</button>
</t>
<t t-name="CopyClipboardChar">
<button class="btn btn-xs btn-primary o_clipboard_button o_btn_char_copy">
<i class="fa fa-clipboard"/>
Copy Text
</button>
</t>
<t t-name="im_livechat.FeedBack">
<div class="o_livechat_rating">
<div class="o_livechat_rating_feedback_text"> Did we correctly answer your question ? </div>
<div class="o_livechat_rating_choices">
<img alt="Good" data-value="10" t-att-src="widget.server_origin + '/rating/static/src/img/rating_10.png'"/>
<img alt="OK" data-value="5" t-att-src="widget.server_origin + '/rating/static/src/img/rating_5.png'"/>
<img alt="Bad" data-value="1" t-att-src="widget.server_origin + '/rating/static/src/img/rating_1.png'"/>
<div class="o_livechat_no_feedback text-muted">
<em> I don't want to rate this conversation</em>
</div>
</div>
<div class="o_livechat_rating_reason">
<textarea id="reason" placeholder="Explain your note"/>
<div class="o_livechat_rating_reason_button">
<input class="o_rating_submit_button" type="button" value="Send"/>
</div>
</div>
</div>
</t>
<t t-extend="mail.chat.Sidebar">
<t t-jquery=".o_mail_chat_sidebar" t-operation="append">
<t t-set="channel_type" t-value="'livechat'"/>
<t t-set="disable_add_channel" t-value="true"/>
<t t-call="mail.chat.SidebarTitle">
<t t-set="channel_title">Livechat</t>
<t t-set="channel_icon" t-value="fa-comments"/>
</t>
<t t-call="mail.chat.SidebarItems"/>
</t>
</t>
<t t-extend="mail.discuss_mobile">
<t t-jquery=".o_mail_mobile_tabs" t-operation="append">
<div class="o_mail_mobile_tab" data-type="livechat">
<span class="fa fa-comments"/>
<span class="o_tab_title">Livechat</span>
</div>
</t>
</t>
<div class="col-md-12" t-name="LunchPreviousOrdersWidgetNoOrder">
<h3>This is the first time you order a meal</h3>
<p class="text-muted">
Select a product and put your order comments on the note.
</p>
<p class="text-muted">
Your favorite meals will be created based on your last orders.
</p>
<p class="text-muted">
Don't forget the alerts displayed in the reddish area
</p>
</div>
<t t-name="LunchPreviousOrdersWidgetList">
<div class="col-md-4" t-as="supplier" t-foreach="categories">
<h3>
<t t-esc="supplier"/>
</h3>
<div class="o_lunch_vignette" t-as="order" t-foreach="categories[supplier]">
<button class="pull-right o_add_button oe_edit_only oe_link" t-att-data-id="order.line_id" type="button">
<span class="fa fa-plus-square"/>
<span>Add</span>
</button>
<div>
<t t-esc="order.product_name"/>
<span class="badge pull-right">
<span class="o_lunch_price" t-raw="formatValue(order)"/>
</span>
</div>
<div class="text-muted">
<t t-esc="order.note" t-if="order.note != false"/>
</div>
</div>
</div>
</t>
<t t-name="StatusbarButtons">
<div class="o_statusbar_buttons">
<div class="btn-group">
<a aria-expanded="false" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" href="#">Action</a>
<ul class="dropdown-menu" role="menu"/>
</div>
</div>
</t>
<t t-name="FieldStatus.content.mobile">
<button class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" type="button">
<t t-esc="status.display_name" t-if="status"/>
</button>
<ul class="dropdown-menu o-status-more" role="menu">
<li t-as="i" t-foreach="selection">
<t t-call="FieldStatus.content.button"/>
</li>
</ul>
</t>
<t t-name="BurgerMenu">
<div class="o_burger_menu o_in_home_menu">
<div class="o_burger_menu_topbar">
<span>
<img class="img-circle o_burger_menu_avatar" t-att-src="'/web/image?model=res.users&field=image_small&id=' + session.uid"/>
<span class="o_burger_menu_username">
<t t-esc="session.name"/>
</span>
<span class="o_burger_menu_caret">
<span class="caret"/>
</span>
</span>
<span class="fa fa-close o_burger_menu_close pull-right"/>
</div>
<div class="o_burger_menu_content o_burger_menu_dark">
<div class="o_burger_menu_user">
<div class="o_burger_menu_companies" t-if="session.user_companies">
<div class="o_burger_menu_user_title">COMPANIES</div>
<t t-as="company" t-foreach="session.user_companies.allowed_companies">
<div t-att-data-id="company[0]" t-attf-class="o_burger_menu_company #{session.user_companies.current_company[0] == company[0] ? 'active' : ''}">
<span class="fa fa-building-o o_burger_menu_company_icon"/>
<t t-esc="company[1]"/>
</div>
</t>
</div>
</div>
<div class="o_burger_menu_app"/>
</div>
</div>
</t>
<t t-name="Menu.sections.mobile">
<t t-set="mobile" t-value="true"/>
<t t-as="primary_menu" t-foreach="menu_data.children">
<section t-att-class="primary_menu.id">
<t t-if="primary_menu.children.length">
<t t-as="submenu" t-foreach="primary_menu.children">
<t t-set="menu" t-value="submenu"/>
<t t-call="Menu.link"/>
</t>
</t>
</section>
</t>
</t>
<div class="o_home_menu" t-name="HomeMenu">
<div class="o_menu_search o_bar_hidden hidden-xs">
<span class="fa fa-search fa-2x o_menu_search_icon"/>
<input class="o_menu_search_input" onfocus="this.value = this.value;" placeholder="Search..." type="text"/>
</div>
<div class="o_home_menu_scrollable">
<t t-call="HomeMenu.Content"/>
</div>
</div>
<t t-name="HomeMenu.Content">
<div class="o_apps" t-if="widget._state.apps.length">
<t t-set="focused_app_index" t-value="widget.getAppIndex()"/>
<t t-as="app" t-foreach="widget._state.apps">
<a t-att-class="'o_app o_menuitem' + ((focused_app_index === app_index)? ' o_focused' : '')" t-att-data-action-id="app.action" t-att-data-action-model="app.action ? app.action.split(',')[0] : ''" t-att-data-menu="app.id" t-att-data-menu-xmlid="app.xmlid" t-att-href="app.href ? app.href : ('#menu_id='+app.id+'&action_id='+app.action)">
<div class="o_app_icon" t-attf-style="background-image: url('#{app.web_icon_data}');" t-if="app.web_icon_data"/>
<div class="o_app_icon" t-attf-style="background-color: #{app.web_icon.background};" t-else="">
<i t-att-class="app.web_icon.class" t-attf-style="color: #{app.web_icon.color};"/>
</div>
<div class="o_caption">
<t t-esc="app.label"/>
</div>
</a>
</t>
</div>
<div class="o_menuitems" t-if="widget._state.menuItems.length">
<t t-set="focused_menu_index" t-value="widget.getMenuIndex()"/>
<t t-as="menu" t-foreach="widget._state.menuItems">
<a t-att-class="'o_menuitem' + ((focused_menu_index === menu_index)? ' o_focused' : '')" t-att-data-menu="menu.id" t-att-href="menu.href ? menu.href : ('#menu_id='+menu.id+'&action_id='+menu.action)">
<t t-esc="menu.label"/>
</a>
</t>
</div>
<t t-if="widget._state.apps.length + widget._state.menuItems.length === 0">
<div class="o_no_result">No result</div>
</t>
<div class="o_home_menu_footer">
<img src="/web/static/src/img/logo_inverse_white_206px.png"/>
</div>
</t>
<t t-name="WebClient.database_expiration_panel">
<div class="database_expiration_panel" id="announcement_bar_table">
<div role="alert" t-attf-class="alert alert-#{diffDays<6?'danger':(diffDays<16?'warning':'info')}">
<a class="oe_instance_hide_panel pull-right" href="#" t-translation="off">&times;</a>
<span>
<span class="oe_instance_expires"/>
<span class="oe_instance_register">
<t t-if="!has_mail">
You will be able to register your database once you have installed your first app.
</t>
<t t-if="has_mail">
<t t-if="diffDays == 30">
<t t-set="delay">1 month</t>
</t>
<t t-if="diffDays != 30">
<t t-set="delay">
<t t-esc="diffDays"/>
days
</t>
</t>
<t t-if="diffDays > 0">
<t t-if="dbexpiration_reason == 'demo'">
This demo database will expire in
<span t-esc="delay"/>
.
</t>
<t t-if="dbexpiration_reason != 'demo'">
This database will expire in
<span t-esc="delay"/>
.
</t>
</t>
<t t-if="diffDays < 1"> This database has expired. </t>
<t t-if="warning=='admin'">
<t t-if="dbexpiration_reason == 'trial' or dbexpiration_reason == 'demo' or dbexpiration_reason === false">
<a class="oe_instance_register_show" href="#">Register your subscription</a>
or
<a class="oe_instance_buy" href="#">buy a subscription</a>
.
</t>
<t t-if="dbexpiration_reason == 'renewal'">
<a class="oe_instance_renew" href="#">Renew your subscription</a>
<a class="check_enterprise_status" href="#" title="Refresh subscription status">
<i class="fa fa-refresh"/>
</a>
</t>
<t t-if="dbexpiration_reason == 'upsell'">
You have more users than your subscription allows.
<br/>
<a class="oe_instance_upsell" href="#">Upgrade your subscription</a>
<a class="check_enterprise_status" href="#" title="Refresh subscription status">
<i class="fa fa-refresh"/>
</a>
</t>
</t>
<t t-if="warning=='user'"> Log in as an administrator to correct the issue. </t>
</t>
</span>
</span>
<span class="oe_instance_register oe_instance_success">
Thank you, your registration was successful! Your database is valid until
<span class="valid_date"/>
.
</span>
<span class="oe_instance_register oe_subscription_updated">
Your subscription was updated and is valid until
<span class="valid_date"/>
.
</span>
<span class="oe_instance_register oe_instance_error">
Something went wrong while registering your database. You can try again or contact
<a href="https://www.odoo.com/help" target="_blank">Odoo Help</a>
.
</span>
<form class="form-inline oe_instance_register oe_instance_register_form">
<br/>
<div class="form-group">
<label for="enterprise_code">Subscription Code: </label>
<input class="form-control" id="enterprise_code" placeholder="Paste code here" title="Your subscription code" type="text"/>
</div>
<button class="btn btn-sm btn-primary" id="confirm_enterprise_code">Register</button>
</form>
</div>
</div>
</t>
<nav t-name="Menu">
<div class="o_main_navbar">
<a class="fa o_menu_toggle" href="#"/>
<button class="fa fa-bars pull-right visible-xs-block o_mobile_menu_toggle" type="button"/>
<div class="o_menu_brand" role="button"/>
<ul class="o_menu_sections"/>
<ul class="o_menu_systray"/>
</div>
</nav>
<t t-name="Menu.link">
<t t-if="!depth">
<t t-set="depth" t-value="1"/>
</t>
<t t-if="depth">
<t t-set="depth" t-value="depth + 1"/>
</t>
<li t-if="!menu.children.length">
<a data-target="#o_navbar_collapse.in" data-toggle="collapse" t-att-class="'o_menu_entry_lvl_' + depth" t-att-data-action-id="menu.action ? menu.action.split(',')[1] : ''" t-att-data-action-model="menu.action ? menu.action.split(',')[0] : ''" t-att-data-menu="menu.id" t-att-data-menu-xmlid="menu.xmlid" t-attf-href="#menu_id=#{menu.id}&action=#{menu.action ? menu.action.split(',')[1] : ''}">
<span>
<t t-esc="menu.name"/>
</span>
</a>
</li>
<li role="presentation" t-att-class="'dropdown-header o_menu_header_lvl_' + depth" t-if="menu.children.length and !mobile">
<span>
<t t-esc="menu.name"/>
</span>
<t t-as="menu" t-foreach="menu.children">
<t t-call="Menu.link"/>
</t>
</li>
<li class="o_burger_menu_section" t-if="menu.children.length and mobile">
<a aria-expanded="false" data-toggle="dropdown" href="#" role="button" t-att-class="'o_menu_entry_lvl_' + depth" t-att-data-menu-xmlid="menu.xmlid">
<t t-esc="menu.name"/>
<span class="fa fa-chevron-right toggle_icon pull-right"/>
</a>
<ul>
<t t-as="menu" t-foreach="menu.children">
<t t-call="Menu.link"/>
</t>
</ul>
</li>
</t>
<t t-name="Menu.sections">
<t t-as="first_level_menu" t-foreach="menu_data.children">
<section t-att-class="first_level_menu.id">
<t t-if="first_level_menu.children.length">
<t t-as="second_level_menu" t-foreach="first_level_menu.children">
<t t-if="!second_level_menu.children.length">
<t t-set="menu" t-value="second_level_menu"/>
<t t-call="Menu.link"/>
</t>
<t t-if="second_level_menu.children.length">
<li>
<a aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" t-att-data-menu-xmlid="second_level_menu.xmlid">
<t t-esc="second_level_menu.name"/>
</a>
<ul class="dropdown-menu" role="menu">
<t t-as="third_level_menu" t-foreach="second_level_menu.children">
<t t-set="menu" t-value="third_level_menu"/>
<t t-call="Menu.link"/>
</t>
</ul>
</li>
</t>
</t>
</t>
</section>
</t>
</t>
<t t-extend="DashboardShare">
<t t-jquery=".user-heading h3" t-operation="replace">
<h3>
Odoo
<t t-esc="server_version"/>
(Enterprise Edition)
</h3>
</t>
<t t-jquery=".user-heading h3" t-operation="after">
<t t-set="expiration_date" t-value="new moment(widget.data.expiration_date).format('LL')"/>
<t t-if="expiration_date">
<h5>
Database expiration:
<t t-esc="expiration_date"/>
</h5>
</t>
</t>
</t>
<t t-extend="UserMenu.Actions">
<t t-jquery="li.divider" t-operation="before">
<li class="hidden-xs">
<a data-menu="shortcuts" href="#">Shortcuts</a>
</li>
</t>
</t>
<div t-name="UserMenu.shortcuts">
<div class="container-fluid">
<div class="row">
<div class="col-sm-offset-2 col-sm-8">
<table class="o_shortcut_table text-center">
<thead>
<tr>
<th style="width:50%;">Description</th>
<th class="text-center" style="width:25%;">Windows/Linux</th>
<th class="text-center" style="width:25%;">Mac</th>
</tr>
</thead>
<tbody>
<tr>
<td align="left">Save a record</td>
<td>
<span class="o_key">Alt</span>
+
<span class="o_key">s</span>
</td>
<td>
<span class="o_key">Control</span>
+
<span class="o_key">Alt</span>
+
<span class="o_key">s</span>
</td>
</tr>
<tr>
<td align="left">Edit a record</td>
<td>
<span class="o_key">Alt</span>
+
<span class="o_key">a</span>
</td>
<td>
<span class="o_key">Control</span>
+
<span class="o_key">Alt</span>
+
<span class="o_key">a</span>
</td>
</tr>
<tr>
<td align="left">Discard a record modification</td>
<td>
<span class="o_key">Alt</span>
+
<span class="o_key">j</span>
</td>
<td>
<span class="o_key">Control</span>
+
<span class="o_key">Alt</span>
+
<span class="o_key">j</span>
</td>
</tr>
<tr>
<td align="left">Create a new record</td>
<td>
<span class="o_key">Alt</span>
+
<span class="o_key">c</span>
</td>
<td>
<span class="o_key">Control</span>
+
<span class="o_key">Alt</span>
+
<span class="o_key">c</span>
</td>
</tr>
<tr>
<td align="left">Open to list view</td>
<td>
<span class="o_key">Alt</span>
+
<span class="o_key">l</span>
</td>
<td>
<span class="o_key">Control</span>
+
<span class="o_key">Alt</span>
+
<span class="o_key">l</span>
</td>
</tr>
<tr>
<td align="left">Open to kanban view</td>
<td>
<span class="o_key">Alt</span>
+
<span class="o_key">k</span>
</td>
<td>
<span class="o_key">Control</span>
+
<span class="o_key">Alt</span>
+
<span class="o_key">k</span>
</td>
</tr>
<tr>
<td align="left">Open the previous record</td>
<td>
<span class="o_key">Alt</span>
+
<span class="o_key">p</span>
</td>
<td>
<span class="o_key">Control</span>
+
<span class="o_key">Alt</span>
+
<span class="o_key">p</span>
</td>
</tr>
<tr>
<td align="left">Open the next record</td>
<td>
<span class="o_key">Alt</span>
+
<span class="o_key">n</span>
</td>
<td>
<span class="o_key">Control</span>
+
<span class="o_key">Alt</span>
+
<span class="o_key">n</span>
</td>
</tr>
<tr>
<td align="left">Toggle home menu</td>
<td>
<span class="o_key">Alt</span>
+
<span class="o_key">h</span>
</td>
<td>
<span class="o_key">Control</span>
+
<span class="o_key">Alt</span>
+
<span class="o_key">h</span>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
<t t-extend="FormSelection">
<t t-jquery=".dropdown-menu.state">$(this).addClass("dropdown-menu-right");</t>
</t>
<t t-name="web_studio.AppCreator">
<div class="o_web_studio_app_creator">
<div class="o_web_studio_app_creator_box">
<div class="o_web_studio_app_creator_left">
<div class="o_web_studio_app_creator_left_content"/>
<div class="o_web_studio_app_creator_buttons">
<button class="btn fa fa-chevron-left o_web_studio_app_creator_back" type="button"/>
<button class="btn o_web_studio_app_creator_next" type="button">
<span/>
<i class="fa fa-chevron-right"/>
</button>
</div>
</div>
<div class="o_web_studio_app_creator_right">
<div class="o_web_studio_app_creator_right_content"/>
</div>
</div>
</div>
</t>
<t t-name="web_studio.AppCreator.Welcome">
<h2 class="mb0">Welcome to</h2>
<h1 class="mt8">Odoo Studio</h1>
<h5 class="text-muted">The fastest way to create a web application.</h5>
</t>
<div t-name="web_studio.AppCreator.App">
<h3 class="mb32">Create your App</h3>
<div class="o_web_studio_app_creator_name">
<label for="app_name">Choose an app name</label>
<input class="o_input" id="app_name" name="app_name" placeholder="e.g. Real Estate" t-att-value="widget.app_name" type="text"/>
</div>
</div>
<div t-name="web_studio.AppCreator.Menu">
<h3 class="mb32">Create your first Menu</h3>
<div class="o_web_studio_app_creator_menu">
<label for="menu_name">Choose your first object name</label>
<input class="o_input" id="menu_name" name="menu_name" placeholder="e.g. Properties" type="text"/>
</div>
<t t-if="widget.debug">
<div class="o_web_studio_app_creator_model_choice">
<div class="o_checkbox">
<input id="model_choice" name="model_choice" type="checkbox"/>
<span/>
</div>
<label for="model_choice">Use an existing Model</label>
</div>
<div class="o_web_studio_app_creator_model mt8">
<label for="name">Model</label>
<div class="js_model"/>
</div>
</t>
</div>
<t t-name="web_studio.AppCreator.NewApp">
<a class="o_app o_web_studio_new_app" href="#">
<img class="o_app_icon" src="/web_studio/static/src/img/default_icon_app.png"/>
<div class="o_caption">New App</div>
</a>
</t>
<t t-name="web_studio.searchRenderer">
<div class="o_web_studio_search_sample_ui o_web_studio_blurred_childs">
<i class="fa fa-search-minus text-right"/>
<hr/>
</div>
<div class="o_web_studio_search_autocompletion_container table-responsive">
<table class="o_web_studio_search_autocompletion_fields o_list_view table ui-droppable" data-type="autocompletion_fields">
<thead>
<tr>
<th>
<i class="fa fa-magic"/>
<span>Autocompletion Fields</span>
</th>
</tr>
</thead>
<tbody> </tbody>
</table>
</div>
<div class="o_web_studio_search_sub_item o_web_studio_search_list_editable table-responsive">
<table class="o_web_studio_search_filters o_list_view table ui-droppable" data-type="filters">
<thead>
<tr>
<th>
<span>
<i class="fa fa-filter"/>
Filters
<span class="caret"/>
</span>
</th>
</tr>
</thead>
<tbody> </tbody>
</table>
</div>
<div class="o_web_studio_search_sub_item o_web_studio_search_list_editable table-responsive">
<table class="o_web_studio_search_group_by o_list_view table ui-droppable" data-type="group_by">
<thead>
<tr>
<th>
<span>
<i class="fa fa-bars"/>
Group by
<span class="caret"/>
</span>
</th>
</tr>
</thead>
<tbody> </tbody>
</table>
</div>
<div class="o_web_studio_search_sub_item table-responsive o_web_studio_blurred_childs">
<table class="table">
<thead>
<tr>
<th>
<span>
<i class="fa fa-star"/>
Favourites
<span class="caret"/>
</span>
</th>
</tr>
</thead>
</table>
</div>
<div class="o_web_studio_search_sub_item o_web_studio_search_sub_item_icon text-right o_web_studio_blurred_childs">
<i class="fa fa-list"/>
<i class="fa fa-bar-chart"/>
<i class="fa fa-table"/>
</div>
</t>
<div class="o_web_studio_client_action o_report_editor" t-name="web_studio.report_editor">
<iframe class="o_report_iframe" t-att-src="widget.report_url"/>
</div>
<div class="o_report_editor_unavailable" t-name="web_studio.report_editor_unavailable">
<p>This report cannot be customized with Odoo Studio.</p>
</div>
<div class="o_web_studio_action_editor" t-name="web_studio.ActionEditor">
<div class="o_web_studio_views">
<div class="o_web_studio_view_column">
<div class="o_web_studio_view_category" name="general">
<h6>
<strong>General Views</strong>
</h6>
</div>
<div class="o_web_studio_view_category" name="timeline">
<h6>
<strong>Timeline Views</strong>
</h6>
</div>
</div>
<div class="o_web_studio_view_column">
<div class="o_web_studio_view_category" name="multiple">
<h6>
<strong>Multiple Records Views</strong>
</h6>
</div>
<div class="o_web_studio_view_category" name="reporting">
<h6>
<strong>Reporting & Presenting Views</strong>
</h6>
</div>
</div>
</div>
</div>
<t t-name="web_studio.ActionEditorView">
<div t-att-data-type="widget.view_type" t-attf-class="o_web_studio_view_type #{!widget.active ? 'o_web_studio_inactive' : ''}">
<div class="o_web_studio_thumbnail">
<span class="o_web_studio_view_label" t-if="!widget.active">Activate View</span>
<span class="o_web_studio_default_view fa-stack fa-sm" t-if="widget.default_view">
<i class="fa fa-circle fa-stack-2x"/>
<i class="fa fa-home fa-stack-1x"/>
</span>
<img t-att-src="'/web_studio/static/src/img/view_type/' + widget.view_type + '.png'"/>
</div>
<div class="o_web_studio_name">
<t t-esc="widget.view_type"/>
</div>
<i class="dropdown-toggle fa fa-ellipsis-v o_web_studio_more" data-toggle="dropdown"/>
<ul class="dropdown-menu" role="menu">
<li t-if="widget.can_default">
<a data-action="set_default_view" href="#" t-att-class="widget.default_view ? 'o_web_studio_view_type_default' : ''">
<i aria-hidden="true" class="fa fa-check" t-if="widget.default_view"/>
Set as Default
</a>
</li>
<li t-if="widget.can_set_another">
<a data-action="set_another_view" href="#">Set another view</a>
</li>
<li class="divider" t-if="widget.can_be_disabled"/>
<li t-if="widget.can_be_disabled">
<a data-action="disable_view" href="#">Disable</a>
</li>
</ul>
</div>
</t>
<div class="o_web_studio_kanban_helper" t-name="web_studio.NewKanbanHelperDialog">
<label for="field">Field</label>
<select class="o_input" id="field" name="field">
<option class="o_new" t-if="widget.show_new" value="">New Field</option>
<option t-as="field" t-att-value="field.name" t-foreach="widget.orderered_fields">
<t t-esc="field.string"/>
<span t-if="widget.debug">
(
<t t-esc="field.name"/>
)
</span>
</option>
</select>
</div>
<ul class="o_web_studio_home_studio_menu" t-name="web_studio.HomeStudioMenu">
<li>
<a aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="#">
Customizations
<span class="caret"/>
</a>
<ul class="dropdown-menu" role="menu">
<li>
<a class="o_web_studio_change_background" href="#">Change Background</a>
<span class="hide">
<t t-call="HiddenInputFile">
<t t-set="fileupload_id" t-value="widget.fileupload_id"/>
<t t-set="fileupload_action" t-translation="off">/web/binary/upload_attachment</t>
<input name="model" type="hidden" value="res.company"/>
<input name="id" t-att-value="widget.company_id" type="hidden"/>
</t>
</span>
</li>
<li t-if="widget.menu_data.background_image">
<a class="o_web_studio_reset_default_background" href="#">Reset Default Background</a>
</li>
<li>
<a class="o_web_studio_import" href="#">Import</a>
</li>
<li>
<a class="o_web_studio_export" href="#">Export</a>
</li>
</ul>
</li>
</ul>
<div class="o_web_studio_menu" t-name="web_studio.Menu">
<div class="o_web_studio_breadcrumb"/>
<ul class="o_menu_sections">
<li>
<a aria-expanded="true" data-name="views" data-toggle="collapse" href="#" role="button">Views</a>
</li>
<li t-if="widget.multi_lang">
<a aria-expanded="true" data-name="translations" data-toggle="collapse" href="#">Translations</a>
</li>
<li>
<a aria-expanded="true" data-name="automations" data-toggle="collapse" href="#">Automations</a>
</li>
<li>
<a aria-expanded="true" data-name="reports" data-toggle="collapse" href="#">Reports</a>
</li>
<li>
<a aria-expanded="true" data-name="acl" data-toggle="collapse" href="#">Access Controls</a>
</li>
<li>
<a aria-expanded="true" data-name="filters" data-toggle="collapse" href="#">Filter Rules</a>
</li>
<li class="o_web_studio_submenu_icons">
<div class="o_web_studio_views_icons">
<t t-if="_.contains(widget.active_view_types, 'form')">
<a data-name="form" href="#">
<i class="fa fa-address-card"/>
</a>
</t>
<t t-if="_.contains(widget.active_view_types, 'list')">
<a data-name="list" href="#">
<i class="fa fa-list-ul"/>
</a>
</t>
<t t-if="_.contains(widget.active_view_types, 'kanban')">
<a data-name="kanban" href="#">
<i class="fa fa-th-large"/>
</a>
</t>
<t t-if="_.contains(widget.active_view_types, 'calendar')">
<a data-name="calendar" href="#">
<i class="fa fa-calendar-o"/>
</a>
</t>
<t t-if="_.contains(widget.active_view_types, 'graph')">
<a data-name="graph" href="#">
<i class="fa fa-bar-chart"/>
</a>
</t>
<t t-if="_.contains(widget.active_view_types, 'pivot')">
<a data-name="pivot" href="#">
<i class="fa fa-table"/>
</a>
</t>
<t t-if="_.contains(widget.active_view_types, 'grid')">
<a data-name="grid" href="#">
<i class="fa fa-th"/>
</a>
</t>
<t t-if="_.contains(widget.active_view_types, 'gantt')">
<a data-name="gantt" href="#">
<i class="fa fa-tasks"/>
</a>
</t>
</div>
</li>
</ul>
<div class="o_web_studio_redo">
<button class="btn btn-sm">
<i class="fa fa-repeat"/>
<span>Redo</span>
</button>
</div>
<div class="o_web_studio_undo">
<button class="btn btn-sm">
<i class="fa fa-undo"/>
<span>Undo</span>
</button>
</div>
<div class="o_web_studio_snackbar"/>
</div>
<div class="o_web_studio_field_dialog_form" t-name="web_studio.NewFieldDialog">
<t t-if="widget.type === 'selection'">
<t t-call="web_studio.SelectionValues"/>
</t>
<t t-else="">
<t t-if="_.contains(['one2many', 'related'], widget.type)">
<label>Select a related field:</label>
<span class="o_many2one_field"/>
</t>
<t t-else="">
<label>Relation:</label>
<span class="o_many2one_model"/>
</t>
</t>
</div>
<t t-name="web_studio.SelectionValues">
<p class="text-muted">Specify all possible values.</p>
<ul class="o_web_studio_selection_editor list-unstyled" t-if="widget.selection.length">
<li t-as="selectionValue" t-att-data-value="selectionValue[0]" t-foreach="widget.selection">
<div class="input-group">
<span class="input-group-addon fa fa-bars"/>
<span class="form-control">
<t t-esc="selectionValue[1]"/>
</span>
<span class="input-group-btn">
<button class="btn btn-primary fa fa-pencil-square-o o_web_studio_edit_selection_value" type="button"/>
<button class="btn btn-danger fa fa-trash-o o_web_studio_remove_selection_value" type="button"/>
</span>
</div>
</li>
</ul>
<div class="o_web_studio_selection_new_value input-group">
<input class="o_input form-control" placeholder="Add new value" type="text"/>
<span class="input-group-btn">
<button class="btn btn-primary fa fa-plus"/>
</span>
</div>
</t>
<t t-name="web_studio.SelectionValues.edit">
<div class="form-group">
<label class="control-label col-sm-3" for="o_selection_label">Label</label>
<div class="col-sm-9">
<input class="form-control" id="o_selection_label" required="required" t-att-value="element[1]"/>
</div>
</div>
<div class="form-group" t-if="debug">
<label class="control-label col-sm-3" for="o_selection_value">Value</label>
<div class="col-sm-9">
<input class="form-control" id="o_selection_value" required="required" t-att-value="element[0]"/>
</div>
</div>
</t>
<t t-if="widget.debug" t-name="web_studio.Sidebar.Parameters">
<button class="btn btn-sm btn-default o_web_studio_parameters">
<i class="fa fa-cog"/>
More
</button>
</t>
<t t-name="web_studio.Sidebar.Remove">
<button class="btn btn-sm btn-danger pull-right o_web_studio_remove">Remove from View</button>
</t>
<div class="o_web_studio_remove_warning_groups" t-name="web_studio.Sidebar.Warning.Groups">
<p>
<i aria-hidden="true" class="fa fa-exclamation-triangle"/>
This field is placed after another element that is only displayed under certain conditions.
</p>
You need to be part of these groups to see this field:
<br/>
<ul>
<t t-as="group_name" t-foreach="widget.state.attrs['studio-view-group-names'].split(',')">
<li>
<t t-esc="group_name"/>
</li>
</t>
</ul>
</div>
<t t-if="widget.debug" t-name="web_studio.Sidebar.XMLEditor">
<button class="btn btn-sm btn-default o_web_studio_xml_editor">
<i class="fa fa-code"/>
XML
</button>
</t>
<t t-name="web_studio.Sidebar.Toolbox">
<hr/>
<div class="o_web_studio_sidebar_toolbox">
<t t-raw="0"/>
</div>
</t>
<div class="o_web_studio_sidebar" t-name="web_studio.ActionEditorSidebar">
<div class="o_web_studio_sidebar_header"/>
<div class="o_web_studio_sidebar_content">
<div class="o_web_studio_sidebar_text">
<label for="name">Action's title</label>
<input id="name" name="name" t-att-value="widget.action_attrs.name" type="text"/>
</div>
<div class="o_web_studio_sidebar_textarea o_web_studio_sidebar_iscode">
<label for="help">Empty List Message</label>
<textarea cols="40" id="help" name="help" rows="5">
<t t-esc="widget.action_attrs.help"/>
</textarea>
</div>
<div class="o_web_studio_sidebar_tags">
<label for="groups">Limit visibility to groups</label>
<div class="o_groups"/>
</div>
<t t-call="web_studio.Sidebar.Toolbox" t-if="widget.debug">
<t t-call="web_studio.Sidebar.Parameters"/>
</t>
</div>
</div>
<div class="o_web_studio_sidebar" t-name="web_studio.ReportEditorSidebar">
<div class="o_web_studio_sidebar_header"/>
<div class="o_web_studio_sidebar_content">
<div class="o_web_studio_sidebar_text">
<label for="name">Name</label>
<input data-type="attributes" id="name" name="name" t-att-value="widget.report.name" type="text"/>
</div>
<div class="o_web_studio_sidebar_text" t-if="widget.debug">
<label for="print_report_name">Printed Report Name</label>
<input data-type="attributes" id="print_report_name" name="print_report_name" t-att-value="widget.report.print_report_name or ''" type="text"/>
</div>
<div class="o_web_studio_sidebar_tags">
<label for="paperformat_id">Paper format</label>
<div class="o_paperformat_id"/>
</div>
<div class="o_web_studio_sidebar_checkbox">
<div class="o_checkbox">
<input id="display_in_print" name="display_in_print" t-att-checked="widget.report.binding_model_id ? 'checked' : undefined" type="checkbox"/>
<span/>
</div>
<label for="display_in_print">Add in the print menu</label>
</div>
<div class="o_web_studio_sidebar_checkbox" t-if="widget.debug">
<div class="o_checkbox">
<input id="attachment_use" name="attachment_use" t-att-checked="widget.report.attachment_use ? 'checked' : undefined" type="checkbox"/>
<span/>
</div>
<label for="attachment_use">Reload from attachment</label>
</div>
<div class="o_web_studio_sidebar_tags">
<label for="groups">Limit visibility to groups</label>
<div class="o_groups"/>
</div>
<t t-call="web_studio.Sidebar.Toolbox" t-if="widget.debug">
<t t-call="web_studio.Sidebar.Parameters"/>
<t t-call="web_studio.Sidebar.XMLEditor"/>
</t>
</div>
</div>
<div class="o_web_studio_sidebar" t-name="web_studio.ViewEditorSidebar">
<div class="o_web_studio_sidebar_header">
<div name="new" t-attf-class="o_web_studio_new #{_.contains(['form', 'list', 'kanban', 'search'], widget.view_type) ? (widget.state.mode === 'new' ? 'active' : '') : 'inactive'}">
<i aria-hidden="true" class="fa fa-plus"/>
Add
</div>
<div name="view" t-attf-class="o_web_studio_view #{widget.state.mode === 'view' ? 'active' : ''}">
<i aria-hidden="true" class="fa fa-television"/>
View
</div>
<div name="properties" t-attf-class="disabled o_web_studio_properties #{widget.state.mode !== 'properties' ? 'inactive' : 'active'}">
<i aria-hidden="true" class="fa fa-server"/>
Properties
</div>
</div>
<div class="o_web_studio_sidebar_content o_display_view" t-if="!(widget.mode === 'properties')">
<t t-if="widget.state.mode === 'view'">
<div class="o_web_studio_sidebar_checkbox" t-if="_.contains(['list', 'form', 'kanban'], widget.view_type)">
<div class="o_checkbox">
<input id="create" name="create" t-att-checked="widget.isTrue(widget.state.attrs.create) ? 'checked' : undefined" type="checkbox"/>
<span/>
</div>
<label for="create">Can Create</label>
</div>
<div class="o_web_studio_sidebar_checkbox" t-if="_.contains(['list', 'form'], widget.view_type)">
<div class="o_checkbox">
<input id="edit" name="edit" t-att-checked="widget.isTrue(widget.state.attrs.edit) ? 'checked' : undefined" type="checkbox"/>
<span/>
</div>
<label for="edit">Can Edit</label>
</div>
<div class="o_web_studio_sidebar_checkbox" t-if="_.contains(['list', 'form'], widget.view_type)">
<div class="o_checkbox">
<input id="delete" name="delete" t-att-checked="widget.isTrue(widget.state.attrs.delete) ? 'checked' : undefined" type="checkbox"/>
<span/>
</div>
<label for="delete">Can Delete</label>
</div>
<t t-if="_.contains(['list', 'form'], widget.view_type)">
<div class="o_web_studio_sidebar_separator"/>
<div class="o_web_studio_sidebar_checkbox">
<div class="o_checkbox">
<input id="show_invisible" t-att-checked="widget.state.show_invisible ? 'checked' : undefined" type="checkbox"/>
<span/>
</div>
<label for="show_invisible">Show invisible elements</label>
</div>
</t>
<t t-if="widget.view_type === 'list'">
<div class="o_web_studio_sidebar_select">
<label for="editable">Editable</label>
<select id="editable" name="editable">
<option/>
<option t-att-selected="widget.state.attrs.editable === 'top' ? 'selected' : undefined" value="top">top</option>
<option t-att-selected="widget.state.attrs.editable === 'bottom' ? 'selected' : undefined" value="bottom">bottom</option>
</select>
</div>
</t>
<t t-if="widget.view_type === 'kanban'">
<div class="o_web_studio_sidebar_checkbox">
<div class="o_checkbox">
<input data-leave-empty="checked" id="quick_create" name="quick_create" t-att-checked="widget.state.attrs.quick_create ? undefined : 'checked'" type="checkbox"/>
<span/>
</div>
<label for="quick_create">Quick Create</label>
</div>
<div class="o_web_studio_sidebar_checkbox">
<div class="o_checkbox">
<input data-leave-empty="checked" id="enable_stage" name="enable_stage" t-att-checked="widget.state.attrs.default_group_by ? 'checked' : undefined" type="checkbox"/>
<span/>
</div>
<label for="enable_stage">Enable Stages</label>
</div>
<div class="o_web_studio_sidebar_select">
<label for="default_group_by">Default Group by</label>
<select id="default_group_by" name="default_group_by">
<option t-att-selected="widget.state.attrs.default_group_by ? undefined : 'selected'"/>
<option t-as="field" t-att-selected="widget.state.attrs.default_group_by === field.name ? 'selected' : undefined" t-att-value="field.name" t-foreach="widget.orderered_fields" t-if="field.store and _.contains(widget.GROUPABLE_TYPES, field.type)">
<t t-esc="field.string"/>
<span t-if="widget.debug">
(
<t t-esc="field.name"/>
)
</span>
</option>
</select>
</div>
</t>
<t t-if="widget.view_type === 'calendar'">
<div class="o_web_studio_sidebar_checkbox">
<div class="o_checkbox">
<input data-leave-empty="checked" id="quick_add" name="quick_add" t-att-checked="widget.isTrue(widget.state.attrs.quick_add) ? 'checked' : undefined" type="checkbox"/>
<span/>
</div>
<label for="quick_add">Quick Create</label>
</div>
<div class="o_web_studio_sidebar_select">
<label for="date_start">Start Date Field</label>
<select id="date_start" name="date_start">
<option t-as="field" t-att-selected="widget.state.attrs.date_start === field.name ? 'selected' : undefined" t-att-value="field.name" t-foreach="widget.orderered_fields" t-if="field.store and _.contains(['date', 'datetime'], field.type)">
<t t-esc="field.string"/>
<span t-if="widget.debug">
(
<t t-esc="field.name"/>
)
</span>
</option>
</select>
</div>
<div class="o_web_studio_sidebar_select">
<label for="date_stop">Stop Date Field</label>
<select id="date_stop" name="date_stop">
<option t-att-selected="widget.state.attrs.date_stop ? undefined : 'selected'"/>
<option t-as="field" t-att-selected="widget.state.attrs.date_stop === field.name ? 'selected' : undefined" t-att-value="field.name" t-foreach="widget.orderered_fields" t-if="field.store and _.contains(['date', 'datetime'], field.type)">
<t t-esc="field.string"/>
<span t-if="widget.debug">
(
<t t-esc="field.name"/>
)
</span>
</option>
</select>
</div>
<div class="o_web_studio_sidebar_select">
<label for="date_delay">Delay Field</label>
<select id="date_delay" name="date_delay">
<option t-att-selected="widget.state.attrs.date_delay ? undefined : 'selected'"/>
<option t-as="field" t-att-selected="widget.state.attrs.date_delay === field.name ? 'selected' : undefined" t-att-value="field.name" t-foreach="widget.orderered_fields" t-if="_.contains(['float', 'integer'], field.type)">
<t t-esc="field.string"/>
<span t-if="widget.debug">
(
<t t-esc="field.name"/>
)
</span>
</option>
</select>
</div>
<div class="o_web_studio_sidebar_select">
<label for="color">Color</label>
<select id="color" name="color">
<option t-att-selected="widget.state.attrs.color ? undefined : 'selected'"/>
<option t-as="field" t-att-selected="widget.state.attrs.color === field.name ? 'selected' : undefined" t-att-value="field.name" t-foreach="widget.orderered_fields" t-if="_.contains(['many2one', 'selection'], field.type)">
<t t-esc="field.string"/>
<span t-if="widget.debug">
(
<t t-esc="field.name"/>
)
</span>
</option>
</select>
</div>
<div class="o_web_studio_sidebar_select">
<label for="all_day">All Day</label>
<select id="all_day" name="all_day">
<option t-att-selected="widget.state.attrs.all_day ? undefined : 'selected'"/>
<option t-as="field" t-att-selected="widget.state.attrs.all_day === field.name ? 'selected' : undefined" t-att-value="field.name" t-foreach="widget.orderered_fields" t-if="field.type === 'boolean'">
<t t-esc="field.string"/>
<span t-if="widget.debug">
(
<t t-esc="field.name"/>
)
</span>
</option>
</select>
</div>
<div class="o_web_studio_sidebar_select">
<label for="mode">Default Display Mode</label>
<select id="mode" name="mode">
<option/>
<option t-att-selected="widget.state.attrs.mode === 'day' ? 'selected' : undefined" value="day">day</option>
<option t-att-selected="widget.state.attrs.mode === 'week' ? 'selected' : undefined" value="week">week</option>
<option t-att-selected="widget.state.attrs.mode === 'month' ? 'selected' : undefined" value="month">month</option>
</select>
</div>
</t>
<t t-if="widget.view_type === 'gantt'">
<div class="o_web_studio_sidebar_select">
<label for="date_start">Start Date Field</label>
<select id="date_start" name="date_start">
<option t-as="field" t-att-selected="widget.state.attrs.date_start === field.name ? 'selected' : undefined" t-att-value="field.name" t-foreach="widget.orderered_fields" t-if="field.store and _.contains(['date', 'datetime'], field.type)">
<t t-esc="field.string"/>
<span t-if="widget.debug">
(
<t t-esc="field.name"/>
)
</span>
</option>
</select>
</div>
<div class="o_web_studio_sidebar_select">
<label for="date_stop">Stop Date Field</label>
<select id="date_stop" name="date_stop">
<option t-att-selected="widget.state.attrs.date_stop ? undefined : 'selected'"/>
<option t-as="field" t-att-selected="widget.state.attrs.date_stop === field.name ? 'selected' : undefined" t-att-value="field.name" t-foreach="widget.orderered_fields" t-if="field.store and _.contains(['date', 'datetime'], field.type)">
<t t-esc="field.string"/>
<span t-if="widget.debug">
(
<t t-esc="field.name"/>
)
</span>
</option>
</select>
</div>
<div class="o_web_studio_sidebar_select">
<label for="date_delay">Delay Field</label>
<select id="date_delay" name="date_delay">
<option t-att-selected="widget.state.attrs.date_delay ? undefined : 'selected'"/>
<option t-as="field" t-att-selected="widget.state.attrs.date_delay === field.name ? 'selected' : undefined" t-att-value="field.name" t-foreach="widget.orderered_fields" t-if="_.contains(['float', 'integer'], field.type)">
<t t-esc="field.string"/>
<span t-if="widget.debug">
(
<t t-esc="field.name"/>
)
</span>
</option>
</select>
</div>
<div class="o_web_studio_sidebar_select">
<label for="duration_unit">Duration Unit</label>
<select id="duration_unit" name="duration_unit">
<option/>
<option t-att-selected="widget.state.attrs.duration_unit === 'minute' ? 'selected' : undefined" value="minute">Minute</option>
<option t-att-selected="widget.state.attrs.duration_unit === 'hour' ? 'selected' : undefined" value="hour">Hour</option>
<option t-att-selected="widget.state.attrs.duration_unit === 'day' ? 'selected' : undefined" value="day">Day</option>
<option t-att-selected="widget.state.attrs.duration_unit === 'week' ? 'selected' : undefined" value="week">Week</option>
<option t-att-selected="widget.state.attrs.duration_unit === 'month' ? 'selected' : undefined" value="month">Month</option>
<option t-att-selected="widget.state.attrs.duration_unit === 'year' ? 'selected' : undefined" value="year">Year</option>
</select>
</div>
<div class="o_web_studio_sidebar_select">
<label for="default_group_by">Default Group by</label>
<select id="default_group_by" name="default_group_by">
<option t-att-selected="widget.state.attrs.default_group_by ? undefined : 'selected'"/>
<option t-as="field" t-att-selected="widget.state.attrs.default_group_by === field.name ? 'selected' : undefined" t-att-value="field.name" t-foreach="widget.orderered_fields" t-if="field.store and _.contains(widget.GROUPABLE_TYPES, field.type)">
<t t-esc="field.string"/>
<span t-if="widget.debug">
(
<t t-esc="field.name"/>
)
</span>
</option>
</select>
</div>
<div class="o_web_studio_sidebar_select">
<label for="type">Type</label>
<select id="type" name="type">
<option/>
<option t-att-selected="widget.state.attrs.type === 'gantt' ? 'selected' : undefined" value="gantt">Gantt</option>
<option t-att-selected="widget.state.attrs.type === 'consolidate' ? 'selected' : undefined" value="consolidate">Consolidate</option>
<option t-att-selected="widget.state.attrs.type === 'planning' ? 'selected' : undefined" value="planning">Planning</option>
</select>
</div>
</t>
<t t-if="widget.view_type === 'pivot'">
<div class="o_web_studio_sidebar_checkbox">
<div class="o_checkbox">
<input data-inverse="1" data-leave-empty="unchecked" id="disable_linking" name="disable_linking" t-att-checked="widget.state.attrs.disable_linking ? undefined : 'checked'" type="checkbox"/>
<span/>
</div>
<label for="disable_linking">Allow Link to List View</label>
</div>
<div class="o_web_studio_sidebar_checkbox">
<div class="o_checkbox">
<input data-leave-empty="unchecked" id="display_quantity" name="display_quantity" t-att-checked="widget.state.attrs.display_quantity ? 'checked' : undefined" type="checkbox"/>
<span/>
</div>
<label for="display_quantity">Display Count</label>
</div>
</t>
<t t-call="web_studio.Sidebar.Toolbox" t-if="widget.debug">
<t t-call="web_studio.Sidebar.Parameters"/>
<t t-if="!widget.isEditingX2m">
<t t-call="web_studio.Sidebar.XMLEditor"/>
</t>
<t t-if="_.contains(['list', 'form'], widget.view_type)">
<button class="btn btn-sm btn-default o_web_studio_defaults">Default Values</button>
</t>
</t>
</t>
</div>
<t t-if="widget.state.mode === 'properties'">
<div class="o_web_studio_sidebar_content o_display_field" t-if="widget.state.node.tag === 'field'">
<t t-if="widget.view_type == 'search'">
<t t-call="web_studio.ViewEditorSidebar.autocompletion_field"/>
</t>
<t t-else="1">
<t t-call="web_studio.ViewEditorSidebar.field"/>
</t>
</div>
<div class="o_web_studio_sidebar_content o_display_page" t-if="widget.state.node.tag === 'page'">
<t t-call="web_studio.ViewEditorSidebar.page"/>
</div>
<div class="o_web_studio_sidebar_content o_display_label" t-if="widget.state.node.tag === 'label'">
<t t-call="web_studio.ViewEditorSidebar.label"/>
</div>
<div class="o_web_studio_sidebar_content o_display_group" t-if="widget.state.node.tag === 'group'">
<t t-call="web_studio.ViewEditorSidebar.group"/>
</div>
<t t-if="widget.state.node.tag === 'div'">
<div class="o_web_studio_sidebar_content o_display_chatter" t-if="widget.state.node.attrs.class === 'oe_chatter'">
<t t-call="web_studio.ViewEditorSidebar.chatter"/>
</div>
<div class="o_web_studio_sidebar_content o_display_div" t-else="">
<t t-call="web_studio.ViewEditorSidebar.div"/>
</div>
</t>
<div class="o_web_studio_sidebar_content o_display_button" t-if="widget.state.node.tag === 'button'">
<t t-call="web_studio.ViewEditorSidebar.button"/>
</div>
<div class="o_web_studio_sidebar_content o_display_filter" t-if="widget.state.node.tag ==='filter'">
<t t-if="widget.state.attrs.is_group_by === true">
<t t-call="web_studio.ViewEditorSidebar.group_by"/>
</t>
<t t-else="1">
<t t-call="web_studio.ViewEditorSidebar.filter"/>
</t>
</div>
<div class="o_web_studio_sidebar_content o_display_filter_separator" t-if="widget.state.node.tag ==='separator'">
<t t-call="web_studio.Sidebar.Toolbox">
<t t-call="web_studio.Sidebar.Remove"/>
</t>
</div>
</t>
</div>
<t t-name="web_studio.ViewEditorSidebar.field">
<div class="clearfix o_web_studio_sidebar_checkbox">
<t t-set="attrs_invisible" t-value="widget.state.modifiers.invisible and widget.state.modifiers.invisible !== true"/>
<div t-attf-class="o_checkbox#{attrs_invisible ? ' o_web_studio_checkbox_inactive' : ''}">
<input data-type="attributes" id="invisible" name="invisible" t-att-checked="widget.state.attrs.invisible ? 'checked' : undefined" type="checkbox"/>
<span/>
</div>
<label for="invisible">Invisible</label>
<a class="btn btn-sm btn-link o_web_studio_attrs" data-type="invisible" href="#">Conditional</a>
</div>
<t t-if="widget.state.modifiers.invisible !== true">
<t t-if="_.contains(['list', 'form'], widget.view_type)">
<div class="clearfix o_web_studio_sidebar_checkbox">
<t t-set="attrs_required" t-value="widget.state.modifiers.required and widget.state.modifiers.required !== true"/>
<div t-attf-class="o_checkbox#{attrs_required ? ' o_web_studio_checkbox_inactive' : ''}">
<input data-type="attributes" id="required" name="required" t-att-checked="widget.state.attrs.required ? 'checked' : undefined" t-att-disabled="widget.state.field.required ? 'disabled' : undefined" type="checkbox"/>
<span/>
</div>
<label for="required">Required</label>
<a class="btn btn-sm btn-link o_web_studio_attrs" data-type="required" href="#">Conditional</a>
</div>
<div class="clearfix o_web_studio_sidebar_checkbox">
<t t-set="attrs_readonly" t-value="widget.state.modifiers.readonly and widget.state.modifiers.readonly !== true"/>
<div t-attf-class="o_checkbox#{attrs_readonly ? ' o_web_studio_checkbox_inactive' : ''}">
<input data-type="attributes" id="readonly" name="readonly" t-att-checked="widget.state.attrs.readonly ? 'checked' : undefined" type="checkbox"/>
<span/>
</div>
<label for="readonly">Read only</label>
<a class="btn btn-sm btn-link o_web_studio_attrs" data-type="readonly" href="#">Conditional</a>
</div>
</t>
<div class="o_web_studio_sidebar_checkbox" t-if="widget.view_type === 'kanban'">
<div class="o_checkbox">
<input data-leave-empty="unchecked" data-type="attributes" id="bold" name="bold" t-att-checked="widget.state.attrs.bold ? 'checked' : undefined" type="checkbox"/>
<span/>
</div>
<label for="bold">Bold</label>
</div>
<div class="o_web_studio_sidebar_select" t-if="widget.view_type === 'kanban'">
<label for="display">Display</label>
<select id="display" name="display">
<option t-att-selected="!widget.state.attrs.display ? 'selected' : undefined" value="false">Default</option>
<option t-att-selected="widget.state.attrs.display === 'right' ? 'selected' : undefined" value="right">Pull Right</option>
<option t-att-selected="widget.state.attrs.display === 'full' ? 'selected' : undefined" value="full">Full Width</option>
</select>
</div>
<div class="o_web_studio_sidebar_text">
<label for="string">Label</label>
<input data-type="attributes" id="string" name="string" t-att-value="widget.state.attrs.string" type="text"/>
</div>
<div class="o_web_studio_sidebar_text" t-if="widget.view_type === 'form'">
<label for="help">Help Tooltip</label>
<input data-type="attributes" id="help" name="help" t-att-value="widget.state.attrs.help" type="text"/>
</div>
<t t-if="widget.state.attrs.related">
<div class="o_web_studio_sidebar_text">
<label for="related">Related Field</label>
<input id="related" name="related" readonly="readonly" t-att-value="widget.state.attrs.related" type="text"/>
</div>
</t>
<div class="o_web_studio_sidebar_text" t-if="(widget.view_type === 'form' or (widget.view_type === 'list' and widget.state.attrs.editable)) and widget.has_placeholder">
<label for="placeholder">Placeholder</label>
<input data-type="attributes" id="placeholder" name="placeholder" placeholder="Placeholder Text" t-att-value="widget.state.attrs.placeholder" type="text"/>
</div>
<div class="o_web_studio_sidebar_text" t-if="widget.debug">
<label for="name">Technical Name</label>
<div class="input-group">
<span class="input-group-addon" t-if="widget.isRenamingAllowed(widget.state.attrs.name)">x_studio_</span>
<input data-type="field_name" id="id" name="name" t-att-value="widget.state.attrs.name.replace('x_studio_', '')" t-if="widget.isRenamingAllowed(widget.state.attrs.name)" type="text"/>
<span t-else="1">
<t t-esc="widget.state.attrs.name"/>
</span>
</div>
</div>
<div class="o_web_studio_sidebar_select" t-if="_.contains(['list', 'form', 'kanban'], widget.view_type) and (widget.debug or widget.state.attrs.widget !== 'statusbar')">
<label for="widget">Widget</label>
<select id="widget" name="widget">
<option t-att-selected="widget.state.attrs.widget ? undefined : 'selected'"/>
<option t-as="w" t-att-selected="widget.state.attrs.widget === w ? 'selected' : undefined" t-foreach="widget.state.field.field_widgets">
<t t-esc="w"/>
</option>
</select>
</div>
<div class="o_web_studio_sidebar_text" t-if="widget.view_type === 'form' and widget.state.attrs.widget === 'image'">
<label for="img_size">Image Size</label>
<t t-set="img_size_value" t-value="widget.state.attrs.options.size ? widget.state.attrs.options.size[0] : 90"/>
<select id="img_size" name="img_size">
<option t-att-selected="img_size_value === 90 ? 'selected' : undefined" value="90">Small</option>
<option t-att-selected="img_size_value === 180 ? 'selected' : undefined" value="180">Medium</option>
<option t-att-selected="img_size_value === 270 ? 'selected' : undefined" value="270">Large</option>
</select>
</div>
<div t-att-class="widget.state.field.type === 'selection' ? 'o_web_studio_sidebar_select' : 'o_web_studio_sidebar_text'" t-if="!_.contains(widget.NON_DEFAULT_TYPES, widget.state.field.type)">
<label for="default_value">Default value</label>
<t t-if="widget.state.field.type === 'selection'">
<select data-type="default_value" id="default_value" name="default_value">
<option t-att-selected="widget.state.default_value ? undefined : 'selected'"/>
<option t-as="item" t-att-selected="widget.state.default_value === item[0] ? 'selected' : undefined" t-att-value="item[0]" t-foreach="widget.state.field.selection">
<t t-esc="item[1]"/>
</option>
</select>
</t>
<t t-else="">
<input data-type="default_value" id="default_value" t-att-value="widget.state.default_value" type="text"/>
</t>
</div>
<t t-if="_.contains(['many2many', 'many2one', 'one2many'], widget.state.field.type)">
<div class="o_web_studio_sidebar_text o_web_studio_sidebar_iscode">
<label for="domain">Domain</label>
<input data-type="attributes" id="domain" name="domain" t-att-value="widget.domainToStr(widget.state.attrs.domain)" type="text"/>
</div>
<div class="o_web_studio_sidebar_text o_web_studio_sidebar_iscode">
<label for="context">Context</label>
<input data-type="attributes" id="context" name="context" t-att-value="JSON.stringify(widget.state.attrs.context)" type="text"/>
</div>
</t>
</t>
<div class="o_web_studio_sidebar_tags">
<label for="groups">Limit visibility to groups</label>
<div class="o_groups"/>
</div>
<div t-if="widget.state.field.manual and widget.state.field.type === 'selection'">
<a class="btn btn-sm btn-link o_web_studio_edit_selection_values" href="#">
<i class="fa fa-pencil"/>
Edit Possible Values
</a>
</div>
<t t-call="web_studio.Sidebar.Toolbox">
<t t-call="web_studio.Sidebar.Parameters"/>
<t t-call="web_studio.Sidebar.Remove"/>
<t t-if="widget.state.attrs['studio-view-group-names']">
<hr/>
<t t-call="web_studio.Sidebar.Warning.Groups"/>
</t>
</t>
</t>
<t t-name="web_studio.ViewEditorSidebar.autocompletion_field">
<div>
<label for="string">Label</label>
<input data-type="attributes" id="string" name="string" t-att-value="widget.state.attrs.string" type="text"/>
</div>
<t t-call="web_studio.Sidebar.Remove"/>
</t>
<t t-name="web_studio.ViewEditorSidebar.page">
<div class="o_web_studio_sidebar_text">
<label for="string">Label</label>
<input id="string" name="string" t-att-value="widget.state.attrs.string" type="text"/>
</div>
<t t-call="web_studio.Sidebar.Toolbox">
<t t-call="web_studio.Sidebar.Remove"/>
<t t-if="widget.state.attrs['studio-view-group-names']">
<hr/>
<t t-call="web_studio.Sidebar.Warning.Groups"/>
</t>
</t>
</t>
<t t-name="web_studio.ViewEditorSidebar.group">
<div class="o_web_studio_sidebar_text">
<label for="string">Label Text</label>
<input id="string" name="string" t-att-value="widget.state.attrs.string" type="text"/>
</div>
<t t-call="web_studio.Sidebar.Toolbox">
<t t-call="web_studio.Sidebar.Remove"/>
<t t-if="widget.state.attrs['studio-view-group-names']">
<hr/>
<t t-call="web_studio.Sidebar.Warning.Groups"/>
</t>
</t>
</t>
<t t-name="web_studio.ViewEditorSidebar.filter">
<div class="o_web_studio_sidebar_text">
<label for="string">Label Text</label>
<input id="string" name="string" t-att-value="widget.state.attrs.string" type="text"/>
<label for="domain">Filter Domain</label>
<input id="domain" name="domain" readonly="readonly" t-att-value="widget.state.attrs.domain" type="text"/>
</div>
<t t-call="web_studio.Sidebar.Toolbox">
<t t-call="web_studio.Sidebar.Remove"/>
</t>
</t>
<t t-name="web_studio.ViewEditorSidebar.chatter">
<div class="o_web_studio_sidebar_text">
<label for="email_alias">Email Alias</label>
<div class="input-group">
<input data-type="email_alias" id="email_alias" name="email_alias" t-att-value="widget.state.email_alias" type="text"/>
<div class="input-group-addon">
@
<t t-esc="widget.state.alias_domain" t-if="widget.state.alias_domain"/>
</div>
</div>
<div class="mt8" t-if="widget.state.email_alias and widget.state.alias_domain">
Send a
<a t-att-href="'mailto:' + widget.state.email_alias + '@' + widget.state.alias_domain + '?subject=test'">test email</a>
.
</div>
</div>
<t t-call="web_studio.Sidebar.Toolbox">
<t t-call="web_studio.Sidebar.Remove"/>
</t>
</t>
<t t-name="web_studio.ViewEditorSidebar.button">
<div class="o_web_studio_sidebar_text o_web_studio_sidebar_iscode" t-if="widget.is_stat_btn">
<label>Icon</label>
<input name="icon" t-att-value="widget.state.attrs.icon" type="text"/>
</div>
<t t-else="">
<h3>Rainbow Man</h3>
<t t-set="rainbow" t-value="widget.state.attrs.effect"/>
<div class="o_web_studio_sidebar_checkbox">
<div class="o_checkbox">
<input id="rainbow" name="rainbow" t-att-checked="rainbow ? 'checked' : undefined" type="checkbox"/>
<span/>
</div>
<label for="rainbow">Rainbow Effect</label>
</div>
<t t-if="rainbow">
<div class="o_web_studio_sidebar_text">
<label for="rainbow_message">Message</label>
<input id="rainbow_message" name="rainbow_message" t-att-value="rainbow.message or 'Well Done!'" type="text"/>
</div>
<div class="o_web_studio_sidebar_select">
<label for="rainbow_fadeout">Fadeout Speed</label>
<select id="rainbow_fadeout" name="rainbow_fadeout">
<option t-att-selected="rainbow.fadeout === 'fast' ? 'selected' : undefined" value="fast">Fast</option>
<option t-att-selected="rainbow.fadeout === 'medium' ? 'selected' : undefined" value="medium">Medium</option>
<option t-att-selected="rainbow.fadeout === 'slow' ? 'selected' : undefined" value="slow">Slow</option>
<option t-att-selected="rainbow.fadeout === 'no' ? 'selected' : undefined" value="no">No</option>
</select>
</div>
<div>
<input id="rainbow_img_url" name="rainbow_img_url" t-att-value="rainbow.img_url" type="hidden"/>
<div class="mb8 ml64 mr64">
<img class="img img-responsive" t-att-src="rainbow.img_url or '/web/static/src/img/smile.svg'"/>
</div>
</div>
<div class="text-center">
<button class="btn btn-sm btn-default o_img_upload">
<i class="fa fa-upload"/>
Change Image
</button>
<button class="btn btn-sm btn-default o_img_reset" t-if="rainbow.img_url">
<i class="fa fa-undo"/>
Reset Image
</button>
</div>
<span class="hide">
<t t-call="HiddenInputFile">
<t t-set="fileupload_id" t-value="widget.fileupload_id"/>
<t t-set="fileupload_action" t-translation="off">/web/binary/upload_attachment</t>
<input name="model" type="hidden" value="res.users"/>
<input name="id" t-att-value="widget.user_id" type="hidden"/>
</t>
</span>
</t>
</t>
<t t-call="web_studio.Sidebar.Toolbox">
<t t-call="web_studio.Sidebar.Remove"/>
</t>
</t>
<t t-name="web_studio.ViewEditorSidebar.label">
<div class="o_web_studio_sidebar_text">
<label for="string">Label</label>
<input id="string" name="string" t-att-value="widget.state.attrs.string" type="text"/>
</div>
<t t-call="web_studio.Sidebar.Toolbox">
<t t-call="web_studio.Sidebar.Remove"/>
</t>
</t>
<t t-name="web_studio.ViewEditorSidebar.div">
<t t-call="web_studio.Sidebar.Toolbox">
<t t-call="web_studio.Sidebar.Remove"/>
</t>
</t>
<t t-name="web_studio.ViewEditorSidebar.group_by">
<div class="o_web_studio_sidebar_text">
<label for="string">Label</label>
<input data-type="attributes" id="string" name="string" t-att-value="widget.state.attrs.string" type="text"/>
</div>
<t t-call="web_studio.Sidebar.Remove"/>
</t>
<div class="o_web_studio_new_button_dialog" t-name="web_studio.NewButtonBoxDialog">
<div>
<label>Label</label>
<input class="o_input" name="string" placeholder="My Button" type="text"/>
</div>
<div>
<label>Icon</label>
<div>
<t t-as="icon" t-foreach="widget.ICONS">
<div class="o_web_studio_icon_selector" t-att-data-value="icon">
<i t-att-class="icon"/>
</div>
</t>
</div>
</div>
<div>
<label>Select a related field</label>
<div class="js_many2one_field"/>
</div>
</div>
<t t-name="web_studio.NewViewDialog">
<div class="o_web_studio_new_view_dialog">
<div class="o_web_studio_select">
<label for="date_start">Start Date Field</label>
<select class="o_input" name="date_start" t-att-data-field="'date_start'">
<option t-as="field" t-att-value="field.name" t-foreach="widget.date_fields">
<t t-esc="field.string"/>
<span t-if="widget.debug">
(
<t t-esc="field.name"/>
)
</span>
</option>
</select>
</div>
<div class="o_web_studio_select">
<label for="date_stop">Stop Date Field</label>
<select class="o_input" name="date_stop" t-att-data-field="'date_stop'">
<option/>
<option t-as="field" t-att-value="field.name" t-foreach="widget.date_fields">
<t t-esc="field.string"/>
<span t-if="widget.debug">
(
<t t-esc="field.name"/>
)
</span>
</option>
</select>
</div>
</div>
</t>
<div class="o_web_studio_icon_creator" t-name="web_studio.IconCreator">
<t t-if="widget.uploaded">
<div class="o_web_studio_uploaded_image" t-attf-style="background-image: url('#{widget.uploaded_image}');"/>
<div class="o_web_studio_upload">
<a class="js_discard_upload" href="#">Design your Icon</a>
<span class="text-muted">or</span>
<a class="js_upload" href="#">upload one</a>
<span class="hide">
<t t-call="HiddenInputFile">
<t t-set="fileupload_id" t-value="widget.fileupload_id"/>
<t t-set="fileupload_action" t-translation="off">/web/binary/upload_attachment</t>
<input name="model" type="hidden" value="res.users"/>
<input name="id" t-att-value="widget.user_id" type="hidden"/>
</t>
</span>
</div>
</t>
<t t-else="">
<t t-if="widget.mode === 'edit'">
<h6>Design your Icon</h6>
</t>
<div class="o_web_studio_icon">
<div class="o_app_icon">
<i/>
</div>
</div>
<t t-if="widget.mode === 'edit'">
<div class="o_web_studio_selectors">
<div class="o_web_studio_selector" data-type="background_color">
<span class="o_web_studio_selector_pointer"/>
</div>
<div class="o_web_studio_selector" data-type="color">
<span class="o_web_studio_selector_pointer"/>
</div>
<div class="o_web_studio_selector" data-type="icon">
<i/>
<span class="o_web_studio_selector_pointer"/>
</div>
</div>
<div class="clearfix"/>
<div class="o_web_studio_upload">
<span class="text-muted">or</span>
<a class="js_upload" href="#">upload it</a>
<span class="hide">
<t t-call="HiddenInputFile">
<t t-set="fileupload_id" t-value="widget.fileupload_id"/>
<t t-set="fileupload_action" t-translation="off">/web/binary/upload_attachment</t>
<input name="model" type="hidden" value="res.users"/>
<input name="id" t-att-value="widget.user_id" type="hidden"/>
</t>
</span>
</div>
</t>
</t>
</div>
<div class="o_web_studio_palette" t-name="web_studio.IconCreator.IconColorPalette">
<t t-as="color" t-foreach="widget.COLORS">
<div class="o_web_studio_selector" t-att-data-color="color" t-att-style="'background-color: ' + color"/>
</t>
</div>
<div class="o_web_studio_palette" t-name="web_studio.IconCreator.BgPalette">
<t t-as="color" t-foreach="widget.BG_COLORS">
<div class="o_web_studio_selector" t-att-data-color="color" t-att-style="'background-color: ' + color"/>
</t>
</div>
<div class="o_web_studio_icons_library" t-name="web_studio.IconCreator.IconPalette">
<t t-as="icon" t-foreach="widget.ICONS">
<div class="o_web_studio_selector">
<i t-att-class="icon"/>
</div>
</t>
</div>
<div t-name="web_studio.X2ManyEdit">
<button class="btn btn-xs btn-default btn-primary o_web_studio_editX2Many" data-type="list" type="button">Edit List View</button>
<button class="btn btn-xs btn-default btn-primary o_web_studio_editX2Many" data-type="form" type="button">Edit Form View</button>
</div>
<t t-name="web_studio.EditMenu.MenuItem">
<li>
<a aria-expanded="false" class="o_web_edit_menu dropdown-toggle" data-toggle="dropdown" href="#" role="button">
<i class="fa fa-fw fa-pencil"/>
Edit Menu
</a>
</li>
</t>
<t t-name="studio.contentMenu.dialog.submenu">
<li t-att-data-menu-id="submenu.id" t-attf-id="editmenu_submenu_{{ submenu.id }}">
<div class="input-group">
<span class="input-group-addon fa fa-bars"/>
<span class="form-control">
<span class="js_menu_label">
<t t-esc="submenu.name"/>
</span>
<i class="pull-right fa fa-home" style="margin-top: 3px" t-if="_.contains(widget.roots, submenu)"/>
</span>
<span class="input-group-btn">
<button class="btn btn-primary js_edit_menu fa fa-pencil-square-o" type="button"/>
<button class="btn btn-danger js_delete_menu fa fa-trash-o" type="button"/>
</span>
</div>
<t t-set="children" t-value="submenu.children"/>
<ul t-if="children">
<t t-as="submenu" t-foreach="children">
<t t-call="studio.contentMenu.dialog.submenu"/>
</t>
</ul>
</li>
</t>
<t t-name="web_studio.EditMenu.Dialog">
<div>
<ul class="oe_menu_editor list-unstyled">
<t t-as="submenu" t-foreach="widget.roots">
<t t-call="studio.contentMenu.dialog.submenu"/>
</t>
</ul>
<div class="o_web_studio_edit_menu_desc small pull-right">
<i class="fa fa-info-circle"/>
<small>Drag a menu to the right to create a sub-menu</small>
</div>
<div class="mt48">
<a class="btn btn-default btn-sm js_add_menu" href="#">
<i class="fa fa-plus-circle"/>
New Menu
</a>
</div>
</div>
</t>
<div t-name="web_studio.EditMenu.Dialog.New">
<div>
<label for="name">Name</label>
<input class="o_input" name="name" placeholder="My Menu" type="text"/>
</div>
<div class="mt16">
<label for="name">Model</label>
<div class="js_model"/>
</div>
</div>
<t t-name="web_studio.NewReportDialog">
<div class="o_web_studio_report_template_dialog">
<div class="o_web_studio_report_template_item" t-as="template" t-att-data-template="template.name" t-foreach="widget.templates">
<div>
<t t-esc="template.label"/>
</div>
<div class="o_web_studio_report_template_description">
<t t-esc="template.description"/>
</div>
</div>
</div>
</t>
<t t-name="web_studio.SystrayItem">
<li t-attf-class="o_web_studio_navbar_item #{widget.disabled ? 'o_disabled' : ''} hidden-xs">
<a href="#" title="Toggle Studio">
<img alt="Odoo Studio Icon" height="12px" src="web_studio/static/src/img/studio_icon_small.png" title="Toggle Studio" width="12px"/>
</a>
</li>
</t>
<t t-name="website.social_modal">
<div class="modal fade" id="oe_social_share_modal">
<div class="modal-dialog modal-content">
<div class="modal-header alert alert-info mb0">
<button class="close" data-dismiss="modal" type="button">
<span aria-hidden="true">x</span>
</button>
<h4 class="modal-title">Thanks for posting!</h4>
</div>
<div class="modal-body">
<t t-call="website_forum.social_message_question" t-if="target_type == 'question'"/>
<t t-call="website_forum.social_message_answer" t-if="target_type == 'answer'"/>
<t t-call="website_forum.social_message_default" t-if="target_type == 'default'"/>
<div class="share-icons text-center">
<t t-as="media" t-foreach="medias">
<a style="cursor: pointer" t-attf-class="fa-stack fa-lg share #{media}">
<span class="fa fa-square fa-stack-2x"/>
<span t-attf-class="oe_social_#{media} fa fa-#{media} fa-stack-1x fa-inverse"/>
</a>
</t>
</div>
</div>
</div>
</div>
</t>
<t t-name="website_forum.social_message_question">
<p>
On average,
<b>45% of questions shared</b>
on social networks get an answer within 5 hours. Questions shared on two social networks have
<b>65% more chance to get an answer</b>
!
</p>
</t>
<t t-name="website_forum.social_message_answer">
<p>
By sharing you answer, you will get additional
<b>karma points</b>
if your answer is selected as the right one. See what you can do with karma
<a href="/forum/help-1/faq" target="_blank">here</a>
.
</p>
</t>
<t t-name="website_forum.social_message_default">
<p>
Share this content to increase your chances to be featured on the front page and attract more visitors.
</p>
</t>
<t t-name="website.social_alert">
<div class="alert alert-info alert-dismissable" role="alert">
<button class="close" data-dismiss="alert" type="button">
<span aria-hidden="true">×</span>
<span class="sr-only">Close</span>
</button>
<p>
Move this question to the top of the list by sharing it on social networks.
</p>
<br/>
<div>
<t t-as="media" t-foreach="medias">
<a style="cursor: pointer" t-attf-class="fa-stack fa-lg share oe_share_bump #{media}">
<span class="fa fa-square fa-stack-2x"/>
<span t-attf-class="oe_social_#{media} fa fa-#{media} fa-stack-1x fa-inverse"/>
</a>
</t>
</div>
</div>
</t>
<t t-name="DemoAlert">
<div class="alert alert-info text-center">
<span>
This is a demo database.
<t t-if="window.location.host == 'demo.test.openerp.com'">
<a class="oe_demo_subscribe_link" href="https://www.test.odoo.com/start">
<span class="arrow">
<span class="oe_e"/>
</span>
Start your own database.
</a>
</t>
<t t-if="!(window.location.host == 'demo.test.openerp.com')">
<a class="oe_demo_subscribe_link" href="https://www.odoo.com/start">
<span class="arrow">
<span class="oe_e"/>
</span>
Start your own database.
</a>
</t>
</span>
</div>
</t>
<t t-extend="UserMenu">
<t t-jquery="span" t-operation="replace"/>
<t t-jquery="a[data-menu='account']" t-operation="replace">
<t t-if="window.location.host == 'demo.test.openerp.com'">
<a href="https://www.test.odoo.com/start" target="_blank"> Sign Up </a>
</t>
<t t-if="!(window.location.host == 'demo.test.openerp.com')">
<a href="https://www.odoo.com/start" target="_blank"> Sign Up </a>
</t>
</t>
</t>
<t t-name="sms.sms_count">
<span class="pull-right">
<span class="text-muted o_sms_count"/>
<a class="fa fa-lg fa-info" href="https://iap-services.odoo.com/iap/sms/pricing" target="_blank"/>
</span>
</t>
<ul class="o_clearbit_dropdown dropdown-menu" t-name="web_clearbit.dropdown">
<li t-as="info" t-foreach="suggestions">
<a href="#" t-att-data-index="info_index" t-attf-class="o_clearbit_suggestion clearfix#{info_index == 0 and ' active' or ''}">
<img onerror="this.src='/web/static/src/img/placeholder.png'" t-att-src="info['logo']"/>
<div class="o_clearbit_info">
<strong>
<t t-esc="info['name'] or ' '"/>
</strong>
<div>
<t t-esc="info['domain']"/>
</div>
</div>
</a>
</li>
</ul>
<t t-name="DiagramView.buttons">
<div t-if="widget.is_action_enabled('create')">
<button class="btn btn-primary btn-sm o_diagram_new_button" type="button"> New Node </button>
</div>
</t>
<t t-name="DiagramView">
<div class="o_diagram_header"/>
<div class="o_diagram"/>
</t>
<t t-name="GanttView">
<div t-attf-class="o_gantt_view table-responsive chart_id_{{widget.chart_id}}"> </div>
</t>
<t t-name="GanttView.buttons">
<div class="o_gantt_button_dates">
<button class="o_gantt_button_left btn btn-primary" t-if="!isMobile">
<span class="fa fa-arrow-left"/>
</button>
<button class="o_gantt_button_today btn btn-primary"> Today </button>
<button class="o_gantt_button_right btn btn-primary" t-if="!isMobile">
<span class="fa fa-arrow-right"/>
</button>
</div>
<div class="btn-group" t-if="isMobile">
<a aria-expanded="false" class="btn btn-link dropdown-toggle" data-toggle="dropdown" href="#">
<span class="dropdown_gantt_content mr4">Month</span>
<i class="fa fa-caret-down"/>
</a>
<ul class="dropdown-menu" role="menu">
<li>
<a class="o_gantt_button_scale btn btn-sm btn-default" data-value="day">Day</a>
</li>
<li>
<a class="o_gantt_button_scale btn btn-sm btn-default" data-value="week">Week</a>
</li>
<li>
<a class="o_gantt_button_scale btn btn-sm btn-default active" data-value="month">Month</a>
</li>
<li>
<a class="o_gantt_button_scale btn btn-sm btn-default" data-value="year">Year</a>
</li>
</ul>
</div>
<div t-attf-class="btn-group btn-sm" t-else="">
<button class="o_gantt_button_scale btn btn-sm btn-default" data-value="day" type="button">Day</button>
<button class="o_gantt_button_scale btn btn-sm btn-default" data-value="week" type="button">Week</button>
<button class="o_gantt_button_scale btn btn-sm btn-default" data-value="month" type="button">Month</button>
<button class="o_gantt_button_scale btn btn-sm btn-default" data-value="year" type="button">Year</button>
</div>
</t>
<t t-name="website_links.RecentLink">
<div class="row mb16">
<div class="col-sm-1 col-xs-2 text-center">
<h4>
<t t-esc="widget.link_obj.count"/>
</h4>
<p class="text-muted" style="margin-top: -5px;">clicks</p>
</div>
<div class="col-sm-7 col-xs-7">
<h4 class="truncate_text">
<img t-att-src="widget.link_obj.icon_src"/>
<a class="no-link-style" t-att-href="widget.link_obj.url">
<t t-esc="widget.link_obj.title"/>
</a>
</h4>
<p class="text-muted mb0" style="margin-top: -5px;">
<span class="o_website_links_short_url text-muted" style="position:relative;">
<span id="o_website_links_host">
<t t-esc="widget.link_obj.short_url_host"/>
</span>
<span id="o_website_links_code">
<t t-esc="widget.link_obj.code"/>
</span>
</span>
<span class="o_website_links_edit_tools" style="display:none;">
<a class="o_website_links_ok_edit btn btn-xs btn-primary" href="#">ok</a>
or
<a class="o_website_links_cancel_edit" href="#">cancel</a>
</span>
<a class="o_website_links_edit_code">
<span class="fa fa-pencil gray"/>
</a>
<br/>
<span class="label label-success">
<t t-esc="widget.link_obj.campaign_id[1]"/>
</span>
<span class="label label-success">
<t t-esc="widget.link_obj.medium_id[1]"/>
</span>
<span class="label label-success">
<t t-esc="widget.link_obj.source_id[1]"/>
</span>
</p>
<p class="o_website_links_code_error" style="color:red;font-weight:bold;"/>
</div>
<div class="col-sm-4 col-xs-2">
<button class="btn btn-info btn_shorten_url_clipboard mt8" t-att-data-clipboard-text="widget.link_obj.short_url">Copy</button>
<a class="btn btn-warning mt8" t-attf-href="{{widget.link_obj.short_url}}+">Stats</a>
</div>
</div>
</t>
<t t-extend="website_sale.products_table">
<t t-jquery=".o_top_margin .row .col-xs-12" t-operation="attributes">
<attribute name="class">col-md-6 col-xs-12</attribute>
</t>
<t t-jquery=".o_top_margin .row" t-operation="append">
<div class="col-md-6 col-xs-12 o_dashboard_utms">
<div>
<h4 class="pull-left">REVENUE BY</h4>
<t t-call="website_sale.LinkTrackersDropDown"/>
</div>
<div class="o_utm_no_data_img">
<img alt="There isn't any UTM tag detected in orders" class="utm_chart_image image-responsive mt8" src="website_sale_link_tracker/static/src/img/website_sale_link_tracker_chart_demo.png"/>
</div>
<div class="o_utm_data_graph"/>
</div>
</t>
</t>
<t t-name="website_sale.LinkTrackersDropDown">
<div class="dropdown">
<button aria-expanded="true" aria-haspopup="true" class="btn btn-default btn-sm dropdown-toggle utm_dropdown ml4" data-toggle="dropdown" type="button">
<span class="utm_button_name">Campaigns</span>
<span class="caret ml4"/>
</button>
<ul aria-labelledby="utm_dropdown" class="dropdown-menu" role="menu">
<li>
<a class="js_utm_selector" name="campaign_id">Campaigns</a>
</li>
<li>
<a class="js_utm_selector" name="medium_id">Medium</a>
</li>
<li>
<a class="js_utm_selector" name="source_id">Sources</a>
</li>
</ul>
</div>
</t>
<t t-extend="website.dashboard_header">
<t t-jquery=".o_dashboard_common a.o_dashboard_action .o_primary" t-operation="after">
<div class="o_inner_box o_dashboard_action" name="website_sale.sale_order_action_to_invoice" t-if="widget.dashboards_data.sales.summary.order_to_invoice_count" title="Generate an invoice from orders ready for invoicing.">
<div class="o_highlight">
<t t-esc="widget.dashboards_data.sales.summary.order_to_invoice_count"/>
</div>
Orders to Invoice
</div>
</t>
</t>
</templates>