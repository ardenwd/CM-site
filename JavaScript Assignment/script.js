let allMovies = [];

//Define a movie class with parameters title (string), rating (number) and haveWatched (boolean)
class Movie {
    constructor(
        //define parameters
        title,
        rating,
        haveWatched,
    ) {
        //define properties
        this.title = title;
        this.rating = rating;
        this.haveWatched = haveWatched;
    }
}

//add a movie OBJECT to the allMovies array
function addMovie(movie) {
    //add movie object to array (push)
    allMovies.push(movie);
    console.log("A new movie is added");
}

//iterate through all elements of allMovies array
//print out to console in a correct format
//print out the total number of movies in allMovies array
let printMovies = () => {

    console.log("Printing all movies...");
    for (var i =0; i<allMovies.length; i++){
        console.log(
            allMovies[i].title + 
            ', rating of ' + 
            allMovies[i].rating + 
            ', havewatched: ' + 
            allMovies[i].haveWatched
        );
    }

    //allMovies.forEach(function (title, rating, haveWatched) {
      //  console.log(title, rating, haveWatched);
    //});

    console.log('\nYou have ' + allMovies.length + ' films in total');
    }

//print out to console, only the movies that has a rating higher than rating(argument)
//print out the total number of matches
function highRatings(rating) {
    console.log('printing movie that has a rating higher than ' + rating);
    var count = 0;
    for (var i =0; i<allMovies.length; i++){
        if (allMovies[i].rating > rating){
            count++;
        console.log(allMovies[i].title + ' has a rating of ' + allMovies[i].rating);
    }
}
    console.log('\nIn total there are ' + count + ' matches');
}


//Toggle the 'haveWatched' property of the specified movie 
let changeWatched = (title) => {
    console.log("changing the status of the movie...");
    for (var i =0; i<allMovies.length; i++){
        //if title is a match
        if (allMovies[i].title == title){
            //if the false make true
            if (allMovies[i].haveWatched == false){
                allMovies[i].haveWatched = true;
            }
            //if true make false
            else if (allMovies[i].haveWatched == true){
                allMovies[i].haveWatched = false;
            }
            //break out of loop once switched
            break;
        }
    }   
}   



////////////////////////////////////////////////////////////
//Test code - DO NOT DELETE OR EDIT
let x = new Movie("Spiderman", 3, true);
let y = new Movie("Citizen Kane", 4, false);
let z = new Movie("Zootopia", 4.5, true);

allMovies.push(x,y,z);

console.log("----------------");
console.log("running program......");
console.log("----------------");
printMovies();


let movie1 = new Movie("Parasite", 2, false);


console.log("----------------");
addMovie(movie1);
console.log("----------------");



changeWatched("Spiderman");
console.log("----------------");

printMovies();
console.log("----------------");

changeWatched("Spiderman");
console.log("----------------");

printMovies();
console.log("----------------");

highRatings(3.5);