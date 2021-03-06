/* global jQuery */

(function( $ ) {
    $( '.quiz' ).elementalQuiz( {
        'score_max': 90,
        'answers': [
            {'a':0, 'b': 20, 'c':10 },
            {'a':0, 'b': 5, 'c':20 },
            {'a':0, 'b': 5, 'c':10, 'd':20 },
            {'a':0, 'b': 5, 'c':20 },
            {'a':10, 'b': 10, 'c':0, 'd':0 }
        ],
        'brackets': {
            100:'org',
            70:'com-org',
            50:'com'
        },
        'title': 'Which WordPress is right for you?'
    } );
} )( jQuery );
