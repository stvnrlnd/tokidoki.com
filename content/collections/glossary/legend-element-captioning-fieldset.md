---
id: 4cd5a058-95f1-4fed-ad2c-e8480598e925
blueprint: html
title: 'Legend Element: Caption for Fieldset Groups'
teaser: 'The legend HTML element is used to provide a caption or title for a fieldset, enhancing the organization and accessibility of grouped form controls.'
reference_title:
  code: '<legend>'
  mode: htmlmixed
article:
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: code
        text: '<legend>'
      -
        type: text
        text: ' HTML element is used to provide a caption or title for a '
      -
        type: text
        marks:
          -
            type: code
        text: '<fieldset>'
      -
        type: text
        text: ' element, which groups related form controls within a form. The '
      -
        type: text
        marks:
          -
            type: code
        text: '<legend>'
      -
        type: text
        text: ' element enhances the accessibility and usability of forms by giving context to the grouped controls, helping users understand the purpose of the section. It is typically rendered as a block-level element that appears at the top of the '
      -
        type: text
        marks:
          -
            type: code
        text: '<fieldset>'
      -
        type: text
        text: .
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        text: 'Usage and Characteristics'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: code
        text: '<legend>'
      -
        type: text
        text: ' element must be the first child of a '
      -
        type: text
        marks:
          -
            type: code
        text: '<fieldset>'
      -
        type: text
        text: ' and is used to describe the grouping of form controls within that fieldset. This is particularly useful in complex forms where multiple sections need to be clearly identified. Here is an example of how the '
      -
        type: text
        marks:
          -
            type: code
        text: '<legend>'
      -
        type: text
        text: ' tag can be used:'
  -
    type: codeBlock
    attrs:
      language: null
    content:
      -
        type: text
        text: |-
          <form>
            <fieldset>
              <legend>Personal Information</legend>
              <label for="name">Name:</label>
              <input type="text" id="name" name="name"><br>
              <label for="email">Email:</label>
              <input type="email" id="email" name="email">
            </fieldset>
          </form>
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        text: 'Valid Attributes for '
      -
        type: text
        marks:
          -
            type: code
        text: '<legend>'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: code
        text: '<legend>'
      -
        type: text
        text: ' element does not have specific attributes beyond the global attributes, which include:'
  -
    type: set
    attrs:
      id: m0hgxdsg
      values:
        type: table
        size: md
        first_row_headers: true
        first_column_headers: true
        table:
          -
            cells:
              - Attribute
              - Description
          -
            cells:
              - class
              - 'Specifies one or more class names for the element, used for CSS styling.'
          -
            cells:
              - id
              - 'Defines a unique identifier for the element, useful for linking and JavaScript.'
          -
            cells:
              - style
              - 'Contains inline CSS styles for the element.'
          -
            cells:
              - title
              - 'Provides additional information about the element, often displayed as a tooltip.'
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        text: 'Benefits and Considerations'
  -
    type: bulletList
    content:
      -
        type: listItem
        content:
          -
            type: paragraph
            content:
              -
                type: text
                marks:
                  -
                    type: bold
                text: Accessibility
              -
                type: text
                text: ': The '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<legend>'
              -
                type: text
                text: ' element improves accessibility by providing a descriptive label for a group of related form controls, which is crucial for users relying on screen readers or other assistive technologies.'
      -
        type: listItem
        content:
          -
            type: paragraph
            content:
              -
                type: text
                marks:
                  -
                    type: bold
                text: 'Semantic Clarity'
              -
                type: text
                text: ': Using '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<legend>'
              -
                type: text
                text: ' in conjunction with '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<fieldset>'
              -
                type: text
                text: ' elements helps convey the purpose of grouped form controls, contributing to a well-structured and semantically meaningful form.'
      -
        type: listItem
        content:
          -
            type: paragraph
            content:
              -
                type: text
                marks:
                  -
                    type: bold
                text: 'User Experience'
              -
                type: text
                text: ': The '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<legend>'
              -
                type: text
                text: ' element helps users quickly understand the context and purpose of form sections, enhancing the overall user experience by making forms easier to navigate and fill out.'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'In summary, the '
      -
        type: text
        marks:
          -
            type: code
        text: '<legend>'
      -
        type: text
        text: ' element is a key component for creating accessible and organized forms. It provides a clear and descriptive title for groups of related form controls, enhancing both the usability and accessibility of web forms. Proper use of '
      -
        type: text
        marks:
          -
            type: code
        text: '<legend>'
      -
        type: text
        text: ' elements ensures that users can effectively understand and interact with different sections of a form.'
link: 'https://html.spec.whatwg.org/multipage/form-elements.html#the-legend-element'
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
sitemap_change_frequency: weekly
sitemap_priority: 0.5
tags:
  - html
comments_allowed: true
group: forms_and_input
updated_by: c00c8ed8-a262-4060-92e8-44c2c4931c51
updated_at: 1743366314
seo_title: 'HTML Legend Element: Fieldset Captions Explained'
seo_description: 'Discover the legend HTML element for adding captions to fieldsets, improving form organization and accessibility.'
og_title: 'Understanding the HTML Legend Element'
og_description: 'Learn how the legend element in HTML is used to provide captions for fieldsets, enhancing the clarity and accessibility of grouped form controls in web forms.'
date: '2025-03-30'
---
