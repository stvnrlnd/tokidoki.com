---
id: 679b15bf-ee83-406e-8646-b7d13581c69b
blueprint: html
title: 'Fieldset Element: Grouping Form Elements'
teaser: 'The fieldset HTML element is used to group related elements within a form, enhancing organization and usability by providing a visual grouping and logical structure.'
reference_title:
  code: '<fieldset>'
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
        text: '<fieldset>'
      -
        type: text
        text: ' HTML element is used to group related elements within a form, providing a visual and semantic structure that enhances the organization and usability of complex forms. By grouping form controls and labels, the '
      -
        type: text
        marks:
          -
            type: code
        text: '<fieldset>'
      -
        type: text
        text: ' element helps users understand the relationship between different parts of a form, making it easier to navigate and fill out. This element is often used in conjunction with the '
      -
        type: text
        marks:
          -
            type: code
        text: '<legend>'
      -
        type: text
        text: ' element, which provides a caption for the group, further clarifying the purpose of the enclosed form controls.'
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Usage and Attributes'
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
        text: '<fieldset>'
      -
        type: text
        text: ' element is particularly useful for forms with multiple sections, such as registration forms or surveys, where related inputs need to be grouped together. It visually encloses the grouped elements with a border, which can be styled using CSS to match the design of the webpage. Here is an example of how the '
      -
        type: text
        marks:
          -
            type: code
        text: '<fieldset>'
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
        marks:
          -
            type: bold
        text: 'Valid Attributes for '
      -
        type: text
        marks:
          -
            type: code
        text: '<fieldset>'
  -
    type: set
    attrs:
      id: m0h68ryf
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
              - disabled
              - 'A Boolean attribute that, if present, disables all form controls within the <fieldset>, making them non-interactive and preventing their values from being submitted.'
          -
            cells:
              - form
              - 'Specifies the ID of a <form> element that the <fieldset> is associated with, even if it is not nested within the form.'
          -
            cells:
              - name
              - 'Specifies a name for the <fieldset>, which can be used when accessing the fieldset in JavaScript.'
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
        text: '<fieldset>'
      -
        type: text
        text: ' element supports all global attributes, allowing for additional customization and interaction through CSS and JavaScript.'
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        marks:
          -
            type: bold
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
                text: '<fieldset>'
              -
                type: text
                text: ' element, combined with '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<legend>'
              -
                type: text
                text: ", improves accessibility by providing screen readers with information about the grouping of form controls, making it easier for users to understand the form's structure."
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
                text: Styling
              -
                type: text
                text: ': The default styling of '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<fieldset>'
              -
                type: text
                text: ' includes a border and some padding, but these can be customized using CSS to fit the design of the webpage.'
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
                text: Nesting
              -
                type: text
                text: ': While it is possible to nest '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<fieldset>'
              -
                type: text
                text: ' elements for more complex forms, this should be done sparingly to avoid clutter and confusion.'
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
        text: '<fieldset>'
      -
        type: text
        text: ' element is a powerful tool for organizing form elements, improving both the visual layout and accessibility of forms. It helps create a more intuitive and user-friendly experience by clearly defining sections of related inputs.'
link: 'https://html.spec.whatwg.org/multipage/form-elements.html#the-fieldset-element'
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
updated_at: 1743365289
seo_title: 'HTML Fieldset Element: Form Grouping Explained'
seo_description: 'Discover the fieldset HTML element for organizing form elements, improving structure and usability.'
og_title: 'Understanding the HTML Fieldset Element'
og_description: 'Learn how the fieldset element in HTML is used to group related form elements, enhancing organization and user experience with structured sections.'
date: '2025-03-30'
---
