def func():
    h, w, k = map(int, input().split())
    board = [input() for _ in range(h)]
    min_count = pow(10, 9) + 1
    for i in range(h):
        dot_count = 0
        count = 0
        for j in range(w):
            if board[i][j] == 'x':
                count = 0
            elif board[i][j] == '.':
                dot_count += 1
                count += 1
            else:
                count += 1
            if j-k >= 0 and board[i][j-k] == '.':
                dot_count = max(0, dot_count - 1)
            if count >= k:
                min_count = min(dot_count, min_count)
    transposed_board = [[row[i] for row in board]
                        for i in range(len(board[0]))]
    for i in range(w):
        dot_count = 0
        count = 0
        for j in range(h):
            if transposed_board[i][j] == 'x':
                count = 0
            elif transposed_board[i][j] == '.':
                dot_count += 1
                count += 1
            else:
                count += 1
            if j-k >= 0 and transposed_board[i][j-k] == '.':
                dot_count = max(0, dot_count - 1)
            if count >= k:
                min_count = min(dot_count, min_count)
    if min_count == pow(10, 9) + 1:
        print(-1)
    else:
        print(min_count)


if __name__ == '__main__':
    func()
