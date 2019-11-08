( function( blocks, editor, element ) {
    var el = element.createElement;
    var RichText = editor.RichText;
    var AlignmentToolbar = editor.AlignmentToolbar;
    var BlockControls = editor.BlockControls;

    blocks.registerBlockType( 'wheel-cycle/hero', {
        title: 'Hero',
        icon: 'schedule',
        category: 'layout',

        attributes: {
          content: {
            type: 'array',
            source: 'children',
            selector: 'h1'
          },
          alignment: {
            type: 'string',
            default: 'none'
          },
        },

        edit : function(props) {
          var content = props.attributes.content;
          var alignment = props.attributes.alignment;

          function onChangeContent( newContent ) {
            props.setAttributes( { content: newContent } );
          }
          function onChangeAlignment( newAlignment ) {
            props.setAttributes( { alignment: newAlignment === undefined ? 'none' : newAlignment } );
          }
          return [
            el(
              BlockControls,
              { key: 'controls' },
              el(
                AlignmentToolbar,
                {
                  value: alignment,
                  onChange: onChangeAlignment,
                }
              )
            ),
            el(
              'section',
              {
                style: { textAlign: alignment },
                className: props.className,
              },
              el(
                RichText,
                {
                  key: 'richtext',
                  tagName: 'h1',
                  onChange: onChangeContent,
                  value: content
                }
              )
            )
          ];
        },
        save: function( props ) {
          return el(
            'section',
            { className: 'wheel-cycle-align-' + props.attributes.alignment },
            el(RichText.Content, {
              tagName: 'h1',
              value: props.attributes.content
            })
          );
        }
    } );
}(
    window.wp.blocks,
    window.wp.editor,
    window.wp.element
) );
